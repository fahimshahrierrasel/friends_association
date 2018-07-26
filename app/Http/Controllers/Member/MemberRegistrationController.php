<?php

namespace App\Http\Controllers\Member;

use App\Member;
use App\Nominee;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MemberRegistrationController extends Controller
{
    //
    public function memberRegistrationShow(Request $request)
    {
        $member = $request->session()->get('member');
//        $nominee = $request->session()->get('nominee');
        return view('landing.member_reg_info',compact('member'));
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
        if(empty($request->session()->get('member'))){
            return redirect()->to('/member-reg-info');
        }
//        $member = $request->session()->get('member');
        $nominee = $request->session()->get('nominee');
        return view('landing.nominee_reg_info',compact('nominee'));
    }
    public function nomineeRegistrationStore(Request $request)
    {
        $validatedData = $request->validate([
            'nid' => 'required|unique:members|max:20',
            'name' => 'required|min:4',
            'father_name' => 'required|min:4',
            'mother_name' => 'required|min:4',
            'address' => 'required',
            'dob' => 'required|date',
            'relation' => 'required|max:30',
            'profession' => 'required|max:30',
            'mobile_no' => 'required|min:11|max:11',
        ]);

        if(empty($request->session()->get('nominee'))){
            $nominee= new Nominee();
            $nominee->fill($validatedData);
            $request->session()->put('nominee', $nominee);
        }else{
            $nominee = $request->session()->get('nominee');
            $nominee->fill($validatedData);
            $request->session()->put('nominee', $nominee);
        }

        return redirect('/member-image');
    }

    public function memberImageShow(Request $request) {
        return view();
    }
}
