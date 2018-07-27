<?php

namespace App\Http\Controllers\Member;

use App\Member;
use App\Nominee;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Uuid;

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
            'nid' => 'required|max:20',
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
        if(empty($request->session()->get('nominee'))){
            return redirect()->to('/nominee-reg-info');
        }
        return view('landing.member_reg_img');
    }

    public function memberStore(Request $request) {
        $validatedData = $request->validate([
            'member_image' => 'required|max:1024',
            'member_nid' => 'required|max:1024',
        ]);

        $member = $request->session()->get('member');
        $member->uuid = Uuid::generate(4)->string;

        if ($file = $request->file('member_image')) {
            $image_name = $member->mobile_no . "." . $request->file('member_image')->getClientOriginalExtension();
            $file->move('images/member_images', $image_name);
            $member->member_image = $image_name;
        }
        if ($file = $request->file('member_nid')) {
            $image_name = $member->nid . "." . $request->file('member_nid')->getClientOriginalExtension();
            $file->move('images/member_nids', $image_name);
            $member->member_nid = $image_name;
        }

        $member->save();

        $nominee = $request->session()->get('nominee');
        $member->nominee()->save($nominee);

        $request->session()->forget('member');
        $request->session()->forget('nominee');
        $request->session()->flush();

        return redirect('/member-reg-info')
            ->with('success', 'Your request submitted <strong>Friend\'s Association</strong> contact with you shortly.');
    }
}
