<?php

namespace App\Http\Controllers;

use App\Member;
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
    public function memberRegistrationFirstShow(Request $request)
    {
        $member = $request->session()->get('member');
        $nominee = $request->session()->get('nominee');
        return view('landing.memberreg_first',compact('member','nominee'));
    }
    public function memberRegistrationFirstStore(Request $request)
    {
        $validatedData = $request->validate([
            'nid' => 'required|unique:members|numeric',
            'name' => 'required|max:50',
            'father_name' => 'required|max:50',
            'mother_name' => 'required|max:50',
            'hus_wife_name' => 'nullable|max:30',
            'present_address' => 'required|max:250',
            'permanent_address' => 'required|max:250',
            'dob' => 'required|date',
            'education' => 'required|max:250',
            'nationality' => 'required|max:30',
            'profession' => 'required|max:30',
            'gender' => 'required',
            'blood_group' => 'required',
            'mobile_no' => 'required|numeric',
            'email' => 'required|email',

        ]);

        if(empty($request->session()->get('member'))){
            $member= new Member();
            $member->fill($validatedData);
            $request->session()->put('member', $member);
        }else{
            $member = $request->session()->get('member');
            $member->fill($validatedData);
            $request->session()->put('member', $member);
        }

        return redirect('/become-member-2');

    }
    public function memberRegistrationSecondShow(Request $request)
    {
        $member = $request->session()->get('member');
        $nominee = $request->session()->get('nominee');
        return view('landing.memberreg_second',compact('member','nominee'));
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
        $member = Member::findOrFail($id);
        $title = $member->name;
        return view('admin.members.show', compact('title', 'member'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function active(Request $request)
    {
        $member = Member::findOrFail($request->id);
        $member->status = 1;
        $member->save();
        return redirect()->route('registered-members');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
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
