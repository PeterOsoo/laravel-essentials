<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    //
    public function create(Request $request)
    {
        $message = new Message();

        // prepare object 
        $message->title = $request->title;
        $message->content = $request->content;

        // save 
        $message->save();

        return redirect('/');
    }

    public function view($id)
    {
        $message = Message::findOrFail($id);

        // echo $message->title;

        return view(
            'message',
            [

                'message' => $message
            ]
        );
    }

    public function showMessage($id)
    {

        $message = Message::find($id);
        // echo $messages->title;

        return view(
            'edit',
            [
                'message' => $message
            ]
        );
    }

    function updateMessage(Request $request)
    {

        $message = Message::find($request->id);
        // $message->title = $request->title;
        // $message->content = $request->content;
        // $message->save();

        dd($message);
    }
}
