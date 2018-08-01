<?php

namespace App\Http\Controllers\Api;

use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MemberController extends Controller
{
    public function memberInfo($id) {
        $member = DB::table('members')
            ->join('member_accounts', 'members.id', 'member_accounts.member_id')
            ->select('members.id','members.name', 'members.member_image' , 'member_accounts.balance')
            ->where('members.user_id', '=', $id)
            ->first();
        return response()->json($member, 200);
    }
}
