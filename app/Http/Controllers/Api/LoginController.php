<?php

namespace App\Http\Controllers\Api;

use App\Member;
use App\User;
use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function userLogin(Request $request)
    {
        $credentials = $request->only('mobile_no', 'password');
        if (Auth::attempt($credentials)) {
            $userId = Auth::user()->id;

            $user = (new Member)
                ->join('users', 'members.user_id', 'users.id')
                ->where('user_id', '=', $userId)
                ->select('members.id','members.user_id', 'members.uuid', 'members.mobile_no', 'users.role')
                ->first();

            return response()->json($user, 200);
        } else {
            return response()->json("NO USER FOUND", 404);
        }
    }
}
