<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AdminsController extends Controller
{
   function createadmin(Request $request){
      DB::table('admins')->insert([$request->except('_token')]);
      return redirect()->route('adminset');
   }

   static function retactadmin(){
    $row = DB::select("SELECT * FROM admins WHERE status = 'active' ");
    return $row;
 }

 static function retdeaadmin(){
    $row = DB::select("SELECT * FROM admins WHERE status = 'deactivated' ");
    return $row;
 }

 static function retmsg(){
    $row = DB::select("SELECT * FROM inquiries Order By id DESC ");
    return $row;
 }

 function deactadmin(Request $request){
    DB::table('admins')->where('id', $request->adminid)->update(array(
        'status'=>'deactivated',
    ));

    return redirect()->route('adminset');
 }

 function addinquiry(Request $request){
     $request->created_at=\Carbon\Carbon::now();
    DB::table('inquiries')->insert([$request->except('_token')]);
    return redirect()->route('index');
 }
}
