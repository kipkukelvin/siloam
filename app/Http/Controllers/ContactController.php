<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
        public function index()
    {
        return view('contact');
    }

    public function send(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ]);

$data = [
    'name'    => $request->name,
    'email'   => $request->email,
    'subject'  => $request->subject,
    'user_message' => $request->message,
];

Mail::send('emails.contact', $data, function($msg) use ($data){
    $msg->to('info.siloamict@gmail.com')
        ->replyTo($data['email'], $data['name'])
        ->subject($data['subject']);
});


        return back()->with('success', 'Message sent successfully!');
    }
}
