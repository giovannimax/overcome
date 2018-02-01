<?php
namespace App\Http\Controllers;

date_default_timezone_set('Asia/Hong_Kong');

use Illuminate\Http\Request;
use App\Diary;

class DiariesController extends Controller
{
    function creatediary(Request $request){
    	$appoints = new Diary();
        //$result=$appoints->getspefapp($date);
        $time = date("G:i");
        $request['dia_time']= $time;
        $diary = new Diary();
        $diary->adddiary($request->except('_token'));
    	return redirect()->route('diary');
    }

    static function retdiaries($id){
        $diary = new Diary();
       return $diary->getdiaries($id);
    }
}
