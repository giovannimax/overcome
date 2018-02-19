<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Message;

class MessagesController extends Controller
{
    /*function sendmsg(Request $request){
        $msg = new Message;
        $msg->msg_content = $request->msg_content;
        $msg->sender = $request->sender;
        $msg->convo_id = $request->convo_id;
        $msg->save();
        return "success";
    }*/

    static function convomenu($id, $idnty){
       if($idnty=="pat"){
            $row = DB::select("SELECT * FROM conversations WHERE pat_id = $id");
            return $row;
       } else {
             $row = DB::select("SELECT * FROM conversations WHERE psych_id = $id");
            return $row;
       }
    }

    static function loadmsg($id){
        $row = DB::select("SELECT * FROM messages WHERE convo_id = $id");
        return $row;
    }

    static function retconvo($id){
        $row = DB::select("SELECT * FROM conversations WHERE convo_id = $id");
        return $row;
    }

    function sendmsg(Request $request){
        DB::table('messages')->insert(
            ['msg_content' => $request->msg, 
            'sender' => $request->sender,
            'convo_id' => $request->id,
            "created_at" =>  \Carbon\Carbon::now()]);
    }
}
