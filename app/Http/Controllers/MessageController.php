<?php

namespace App\Http\Controllers;
use App\Mail\MessageReceived;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function store(Request $request)
    {
        $message = request()->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'subject' => 'required|max:100',
            'content' => 'required|min:3'
        ]);

        Mail::to('irving6258@gmail.com')->queue(new MessageReceived($message));

        return 'Mensaje enviado';
    }
}
