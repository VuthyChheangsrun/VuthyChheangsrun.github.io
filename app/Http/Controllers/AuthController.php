<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function register(Request $request){
        // 1. verify email
        $userFound = User::where('email', $request.get('email'))->first();
        if ($userFound) {
            return response(["message"=>'User with this email exist.', 400]);
        }else {
            // 2. verify if the password and confirm password matches
            if ($request.get('password') == $request.get('confirm_password')) {
                // 3. encrypt password
                $user = new User();
                $user->name = $request.get('username');
                $user->email = $request.get('email');
                $user->password = bcrypt($request.get('password'));
                // save OTP in the database or cache for verification
                $otp = mt_rand(100000, 999999);
                $user->otp = $otp;

                // 4. save user record
                $user->save();

                // 5. send OTP to email
                // send OTP via email
                Mail::to($user->email)->send(new OtpMail('http://localhost:80/verify_otp?user_id='.$user->id.'&code='.$otp));

                return ["message" => "success"];
            }else {
                return response(["message" => "Password and confirm password is not matched"], 400);
            }
        }
    }

    public function login(Request $request){
    
    }
    
    public function verrifyOTP(Request $request){
        $code = $request->query('code');
        $userId = $request->query('user_id');

        $user = User::find($userId);
        //verrify the code with otp that hase been stored during registration
        if ($user && $code == $user->otp) {
            // update the user account that the email s verified
            $user->email_verified_at = Carbon::now();

            $user->save();
            return ["message" => "OTP os valid, your account is registered"];
        }else {
            // the OTP is not valid
            return response(["message" => "OTP is invalid"], 400);
        }
    }
}
