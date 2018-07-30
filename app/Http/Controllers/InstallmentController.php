<?php

namespace App\Http\Controllers;

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
        //
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
