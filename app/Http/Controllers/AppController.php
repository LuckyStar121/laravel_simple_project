<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Auth\ResetPasswordController;
use App\Member;
use App\User;
use Hamcrest\AssertionError;
use Illuminate\Http\Request;
use App\UserManagement;
use Illuminate\Support\Facades\Hash;

use Twilio\Rest\Client;
use Authy\AuthyApi;

class AppController extends Controller
{

    private const TWILIO_TEST_API_KEY = "";
    private const TWILIO_TEST_SECRET_KEY = "";
    private const TWILLO_TEST_AUTHY_KEY = "";

    public function Register(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $countrycode = $request->input('countrycode');
        $phone = $request->input('phone');
        $code = $request->input('code');
        $password = bcrypt($request->input('password'));

        $isExist = UserManagement::where('email', $email)
            ->first();

        if ($isExist)
            return response()->json(['status' => 'failed', 'message' => 'already registered']);

        $authy_api = new AuthyApi(self::TWILLO_TEST_AUTHY_KEY);

        $res = $authy_api->phoneVerificationCheck($phone, $countrycode, $code);

        if ($res->ok()) {

            $token = sha1(time());
            $isVerified = true;
            $ret = UserManagement::create([
                'name' => $name,
                'email' => $email,
                'countrycode' => $countrycode,
                'phone' => $phone,
                'isVerified' => $isVerified,
                'password' => $password,
                'remember_token' => $token,
            ]);

            if ($ret)
                return response()->json(['status' => 'success', 'message' => 'Registered']);
            else
                return response()->json(['status' => 'failed', 'message' => $ret]);
        } else
            return response()->json([['status' => 'failed', 'message' => 'failed to verify phone']]);
    }

    public function Login(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');

        $result = UserManagement::where('email', $email)
            ->first();
        if ($result){
            if (Hash::check($password, $result->password))
                return response()->json(['status' => 'success', 'message' => 'login success', 'userid' => $result->id]);
            else
                return response()->json(['status' => 'failed', 'message' => 'Password Wrong']);
        } else {
            return response()->json(['status' => 'failed', 'message' => 'You are not a registered user.']);
        }
    }

    public function getMembers(Request $request){
        $user_id = $request->input('id');
        $members = Member::where('user_id', $user_id)
            ->get();
        return response()->json(["status"=>'success', 'members'=>$members]);
    }

    public function addMembers(Request $request){
        $user_id = $request->input('id');
        $member_name = $request->input('member_name');
        $member_address = $request->input('member_address');
        $member_phone = $request->input('member_phone');
        $member_email = $request->input('member_email');

        $isExistMember = Member::where('user_id', $user_id)
            ->where('member_phone', $member_phone)
            ->first();

        if ($isExistMember)
            return response()->json(['status' => 'failed', 'message' => "Already Existed Member"]);

        $ret = Member::create([
            'user_id' => $user_id,
            'member_name' => $member_name,
            'member_address' => $member_address,
            'member_phone' => $member_phone,
            'member_email' => $member_email,
        ]);

        if ($ret)
            return response()->json(['status' => 'success', 'message' => 'Registered']);
        else
            return response()->json(['status' => 'failed', 'message' => $ret]);
    }

    public function deleteMembers(Request $request){
        $id = $request->input("id");
        $userid = $request->input("userid");

        $ret = Member::where('id', $id)
            ->where('user_id', $userid)
            ->delete();
        if ($ret)
            return response()->json(['status' => 'success', 'message' => 'Deleted']);
        else
            return response()->json(['status' => 'success', 'message' => 'Failed deleting']);
    }
    public function requestCode(Request $request){
        $countrycode = $request->input('countrycode');
        $phone = $request->input('phone');

        $isVerified = UserManagement::where('phone', $phone)
            ->first();

        if ($isVerified != null && $isVerified->isVerified)
            return response()->json(['status' => 'failed', 'message' => 'already used. please other phone']);

        $authy_api = new AuthyApi(self::TWILLO_TEST_AUTHY_KEY);

        $res = $authy_api->phoneVerificationStart($phone, $countrycode, 'sms');

        if ($res->ok())
            return response()->json(['status' => 'success', 'message' => 'sent verification code']);
        else
            return response()->json(['status' => 'failed', 'message' => 'please try to register']);
    }
}
