<?php

namespace App\Http\Controllers;

use Auth;
use App\Role;
use App\User;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function activate(Request $request, $token)
    {
        $userToken = \App\UserToken::where('token', $token)->first();

        if ($userToken) {
            $userToken->status = 1;
            $userToken->save();

            Auth::loginUsingId($userToken->user_id);

            $details = [
                'title' => 'PsychCare 2.0',
                'body' => 'This is for testing email using smtp'
            ];

            \Mail::to('psychchare2.0@gmail.com')->send(new \App\Mail\SendVerificationEmail($details));
            
            return redirect('/home')->with('message', 'Your account has been Activated');

        }else{
            return redirect('/register')->with('message', 'Invalid Token')->with('error', true);
        }
        
    }
    }