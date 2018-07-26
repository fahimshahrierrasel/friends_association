<?php

namespace App\Http\Controllers\Member;

use App\Member;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MemberRegistrationController extends Controller
{
    //
    public function memberRegistrationShow(Request $request)
    {
        $member = $request->session()->get('member');
        $nominee = $request->session()->get('nominee');
        return view('landing.member_reg_info',compact('member','nominee'));
    }
    public function memberRegistrationStore(Request $request)
    {
        $validatedData = $request->validate([
            'nid' => 'required|unique:members|max:20',
            'name' => 'required|min:4',
            'father_name' => 'required|min:4',
            'mother_name' => 'required|min:4',
            'hus_wife_name' => 'nullable|min:4',
            'present_address' => 'required',
            'permanent_address' => 'required',
            'dob' => 'required|date',
            'education' => 'required|max:200',
            'nationality' => 'required|max:30',
            'profession' => 'required|max:100',
            'gender' => 'required',
            'blood_group' => 'required',
            'mobile_no' => 'required|min:11|max:11',
            'email' => 'nullable|email',
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

        return redirect('/nominee-reg-info');

    }
    public function nomineeRegistrationShow(Request $request)
    {
        $member = $request->session()->get('member');
        $nominee = $request->session()->get('nominee');
        return view('landing.memberreg_second',compact('member','nominee'));
    }
    public function nomineeRegistrationStore(Request $request)
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
}
