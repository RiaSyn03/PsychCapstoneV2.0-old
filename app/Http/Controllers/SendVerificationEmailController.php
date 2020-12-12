<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SendVerificationEmailController extends Controller
{
    public function mailsend() {
        $details = [
            'title' => 'PsychCare 2.0',
            'body' => 'This is for testing email using smtp'
        ];
       
        \Mail::to('psychchare2.0@gmail.com')->send(new \App\Mail\SendVerificationEmail($details));
        return view('emails.thanks');
    }
   
   
}
