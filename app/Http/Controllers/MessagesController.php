<?php

namespace App\Http\Controllers;
//allows to handle requests
use Illuminate\Http\Request;
use App\Message;

class MessagesController extends Controller
{
    public function submit(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required']);

        //create message
        $message = new Message;
        $message->name = $request->input('name');
        $message->email = $request->input('email');
        $message->message = $request->input('message');

        //save message
        $message->save();

        //redirect to home with a success message
        return redirect('/')->with('blabla', 'Message Sent');
    }

    public function getMessages()
    {
        $messages = Message::all();

        return view('messages')->with('messages', $messages);
    }

}
