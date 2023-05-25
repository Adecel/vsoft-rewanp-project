<?php

namespace App\Http\Controllers;

use App\Mail\Email;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function sendEmail(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        $mailData = $request->all();
        $email = 'info@vsoftsystems.co.za';

        Mail::to($email)->send(new Email($mailData));

        return redirect()->back()->with(['success' => "Thank you for contacting us"]);
    }
}
