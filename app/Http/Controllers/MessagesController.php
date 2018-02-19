<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessagesController extends Controller
{
    function sendmsg(Request $request){
        $msg = new Message;
        $msg->msg_content = $request->msg_content;
        $msg->sender = $request->sender;
        $msg->convo_id = $request->convo_id;
        $msg->save();
        return "success";
    }
}
