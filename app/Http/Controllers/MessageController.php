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
}
