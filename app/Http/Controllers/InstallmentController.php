<?php

namespace App\Http\Controllers;

use App\Fund;
use App\Installment;
use App\Member;
use App\MemberAccount;
use DB;
use Illuminate\Http\Request;

class InstallmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $installments= DB::table('members')
            ->Join('member_accounts', 'members.id', '=', 'member_accounts.member_id')
            ->Join('installments', 'members.id', '=', 'installments.member_id')
            ->select('members.id as member_id','members.name','members.mobile_no','member_accounts.share_no','installments.id as installment_id','installments.amount as amount', 'installments.late_fee as late_fee', 'installments.installment_date as installment_date'      )
            ->where('members.status', '=', 1)
            ->orderBy('installment_date','desc')
            ->get();
        //dd($allInstallments);
        return view('admin.installments.all_installment',compact('installments'));
    }
    public function editInstallment($id,$installment_id)
    {
        $member = (new Member)->find($id);
        $memberAccount = (new MemberAccount)->where('member_id', '=', $id)->first();
        $currentInstallment = (new Installment)->find($installment_id);
        $count = (new Installment)->where('member_id', $id)->count();
        $lastInstallment = (new Installment)
            ->where('member_id', $id)
            ->orderBy('created_at', 'desc')
            ->first();
        return view('admin.installments.create', compact('member', 'memberAccount',
            'count', 'lastInstallment','currentInstallment'));
    }
    public function create()
    {

        $memberInstallments = DB::table('members')
            ->leftJoin('member_accounts', 'members.id', '=', 'member_accounts.member_id')
            ->leftJoin(DB::raw('(Select count(id) as count, member_id From installments Group By member_id) As inm'), 'members.id', '=', 'inm.member_id')
            ->selectRaw(
                'inm.count, members.id as id, members.name, members.mobile_no, member_accounts.share_no, member_accounts.balance')
            ->where('members.status', '=', 1)
            ->get();
        return view('admin.installments.index', compact('memberInstallments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function createInstallment($id)
    {
        $member = (new Member)->find($id);
        $memberAccount = (new MemberAccount)->where('member_id', '=', $id)->first();
        $count = (new Installment)->where('member_id', $id)->count();
        $lastInstallment = (new Installment)
            ->where('member_id', $id)
            ->orderBy('created_at', 'desc')
            ->first();
        return view('admin.installments.create', compact('member', 'memberAccount',
            'count', 'lastInstallment'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //TODO: Validation required
        //Checking whether there is any late fee
        if($request->has('late_fee')){
            //Late Fee Found, Setting Late Fee True to New Installment
            Installment::create([
                'member_id' => request('id'),
                'amount' => request('amount'),
                'late_fee' => 1,
                'installment_date' => request('installment_date')

            ]);
            //Adding Late Fee Amount in `funds` table's 'Reserve Fund'
            $fund = Fund::where('name','Reserve Fund')->first();
            $fund->balance = $fund->balance+50;
            $fund->save();
        }
        //No Late Fee Found.
        else{
            //Adding The Installment.
            Installment::create([
                'member_id' => request('id'),
                'amount' => request('amount'),
                'installment_date' => request('installment_date')
            ]);
        }
        //Updating `member_account` table's balance.
        $member_acc = MemberAccount::where('member_id',$request->id)->first();
        $member_acc->balance += $request->amount;
        $member_acc->save();
        //Adding installment amount in `funds` table's 'Saving Fund'
        $fund = Fund::where('name','Saving Fund')->first();
        $fund->balance = $fund->balance+$request->amount;
        $fund->save();
        return redirect('/admin/installments/new');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //dd($request->all());
        //
        //TODO: Validation required
        $member_id = $request->id;
        $installment_id = $request->installment_id;
        //Finding instance of the installment to be updated
        $installmentInDb = Installment::where('id',$installment_id)->first();
        //Storing the previous amount of the installment DB instance before changing
        $previous_amount =$installmentInDb->amount ;

        $installmentInDb->amount = $request->amount;
        $installmentInDb->installment_date = $request->installment_date;

        if($request->has('late_fee') && $installmentInDb->late_fee===0){
            $installmentInDb->late_fee = 1;
            $installmentInDb->save();

            //Adding 50 tk from  Reserve Fund because of Late Fee removal
            $fund = Fund::where('name','=','Reserve Fund')->first();
            $fund->balance += 50;
            $fund->save();
        }
        else if($installmentInDb->late_fee===1){
            $installmentInDb->late_fee = 0;
            $installmentInDb->save();

            //Deducting 50 tk from  Reserve Fund because of Late Fee removal
            $fund = Fund::where('name','=','Reserve Fund')->first();
            $fund->balance -= 50;
            $fund->save();
        }
        else{
            $installmentInDb->save();
        }
        //Checking if installment amount is changed
        if($previous_amount !== $request->amount){
            //Since Amount is changed, the `member_accounts` table's balance and `funds`
            //table's balance need to be updated.

            $member_acc = MemberAccount::where('member_id', $member_id)->first();
            $fund = Fund::where('name','=','Saving Fund')->first();

            //Checking whether new instance of installment amount is greater than the
            // installment instance in the DB.

            if($request->amount >$previous_amount){
                //`member_accounts` table's balance is updated to the increase in
                // installment amount.
                $member_acc->balance += ($request->amount - $previous_amount);
                //`funds` table's balance is updated to the increase in
                // installment amount
                $fund->balance += ($request->amount - $previous_amount);
            }
            else{
                //`member_accounts` table's balance is updated to the decrease in
                // installment amount
                $member_acc->balance -= ($previous_amount - $request->amount );
                //`funds` table's balance is updated to the decrease in
                // installment amount
                $fund->balance -= ($previous_amount - $request->amount );
            }
            //Saving the `member_accounts` and `funds` instances.
            $member_acc->save();
            $fund->save();
        }

        return redirect('/admin/installments');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
