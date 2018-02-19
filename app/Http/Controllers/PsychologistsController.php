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
        $row = DB::select("SELECT * FROM psychologists WHERE psych_gndr like '%$gndr%' AND clinic_province like '%$loc%'");
        return $row;
    }

    static function viewpsych(){
        $id = Input::get('psychid');
        $row = DB::select("SELECT * FROM psychologists WHERE psych_id = $id");
        return $row;
    }
}
