<?php

namespace App\Http\Controllers;

use App\Mail\WelcomeEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function index()
    {
        $mailData = [
            'title' => 'Mail from Webappfix update',
            'body' => 'This is for testing email usign smtp halo there',
        ];

        Mail::to('tim26618@gmail.com')->send(new WelcomeEmail($mailData));

    }
    public function contact(){
        return view('contact.index');
    }

    public function create(Request $request){
        // هذه المعلومات ترسل الى الادمن يجب عليك اضافه ايميل الادمن
        // This information is sent to the admin. You must add the admin’s email
        $mailData = [
            'name' => $request->name,
            'title' => $request->title,
            'message' => $request->message,
        ];
        // ذه تكون اجابه عند ارسال الرساله الى الادمن او الى الشركه فيرسل الي هذه القالب
        // This will be the answer when sending the message to
        //  the admin or the company, and it will be sent to this template
        $email = $request->email;
        Mail::to($email)->send(new WelcomeEmail($mailData));
        return  redirect()->back()->with('success', 'Email has been sent successfully!');
        // return redirect('/contact')->with('success', 'Email has been sent successfully');


    }
}
