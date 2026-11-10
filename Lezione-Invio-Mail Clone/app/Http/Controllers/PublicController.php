<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
    public function homepage()
    {
        return view('welcome');
    }

    public function send_application(){
        return view("send-application");
    }

    // Dependency Injection
    public function send_email(Request $request){
        $username = $request->username;
        $email = $request->email;
        $description = $request->description;    

        Mail::to("info@aulab.it")->send(new ContactMail($username, $email, $description));

        // return redirect(route("homepage"))->with('input', 'La tua email è stata inviata correttamente!');
        return redirect(route("thank_you"))->with('input', 'La tua email è stata inviata correttamente!');
    }

    public function thank_you(){
        return view("mail.thank-you");
    }
}
