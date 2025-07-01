<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\Contact;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class ContactController extends Controller
{
    public function index(){
        return view('form');
    }

    public function send(Request $request) {
        $id = auth()->id();
        $user = auth()->loginUsingId($id);

        $nome = Str::before($user->name, ' ');

        $sent = Mail::to("contato@kayroslink.com", "Kayros")->send(new Contact([
            'fromName' => $nome,
            'fromEmail' => $user->email,
            'message' => $request->message,
            'subject' => $request->subject,
        ]));
    }
}
