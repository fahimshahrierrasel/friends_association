<?php

namespace App\Http\Controllers;

use App\Member;
use App\MemberAccount;
use App\User;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function memberRequests()
    {
        $title = 'Member Requests';
        $members = (new Member)->where('status', 0)->get();
        return view('admin.members.index', compact('title', 'members'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function registeredMembers()
    {
        $title = 'Registered Member';
        $members = (new Member)->where('status', 1)->get();
        return view('admin.members.index', compact('title', 'members'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $member = Member::findOrFail($id);
        $title = $member->name;
        return view('admin.members.show', compact('title', 'member'));
    }


    public function activeShow($id)
    {
        $member = (new Member)->find($id);
        return view('admin.members.active_member', compact('member'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function active(Request $request)
    {
        // TODO Need To Make Validation

        $member = (new Member)->find($request->id);
        $member->status = 1;

        $memberAccount = new MemberAccount();
        $memberAccount->share_no = $request->share_no;
        $member->member_account()->save($memberAccount);

        $memberUser = new User();
        $memberUser->name = $member->name;
        $memberUser->email = $member->email;
        $memberUser->mobile_no = $member->mobile_no;
        $memberUser->password = bcrypt($member->mobile_no);
        $memberUser->role = 'Member';
        $memberUser->save();

        $member->user_id = $memberUser->id;
        $member->save();

        return redirect()->route('registered-members');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function inactive(Request $request)
    {
        $member = Member::findOrFail($request->id);
        $member->status = 0;
        $member->save();
        return redirect()->route('member-requests');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
