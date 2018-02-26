<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class PsychologistsController extends Controller
{
    static function findpsych(){
        $gndr = Input::get('gndr');
        $loc = Input::get('loc');
        $row = DB::select("SELECT * FROM psychologists WHERE psych_gndr like '%$gndr%' AND clinic_province like '%$loc%' AND psych_status='approved'");
        return $row;
    }

    static function viewpsych(){
        $id = Input::get('psychid');
        $row = DB::select("SELECT * FROM psychologists WHERE psych_id = $id");
        return $row;
    }

    static function approvepsych(){
        $id = Input::get('psychid');
        DB::table('psychologists')->where('psych_id',$id)->update(array(
            'psych_status'=>'approved',
        ));

        return redirect()->route('admin');   
     }

     static function declinepsych(){
        $id = Input::get('psychid');
        DB::table('psychologists')->where('psych_id',$id)->update(array(
            'psych_status'=>'declined',
        ));

        return redirect()->route('admin');   
     }

     static function checkpsych($id){
        $row = DB::select("SELECT * FROM psychologists WHERE psych_id = $id");
        return $row;
     }

    static function getpendpsych(){
        $row = DB::select("SELECT * FROM psychologists WHERE psych_status = 'pending'");
        return $row;
    }

    static function getveripsych(){
        $row = DB::select("SELECT * FROM psychologists WHERE psych_status = 'approved'");
        return $row;
    }
    static function getdeclpsych(){
        $row = DB::select("SELECT * FROM psychologists WHERE psych_status = 'declined'");
        return $row;
    }

    static function getspefpsych($id){
        $row = DB::select("SELECT * FROM psychologists WHERE psych_id = $id");
        return $row;
    }
}
