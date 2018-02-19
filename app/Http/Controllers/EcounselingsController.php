<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use App\Http\Controllers\PatientsController;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Ecounseling;

class EcounselingsController extends Controller
{
    public function viewspefecoun(){
    	$date = Array();
    	array_push($date, Input::post('date'));
    	$appoints = new Ecounseling();
    	$result=$appoints->getspefapp($date);
    	return view('comp.appointmentstab')->with('appoints', $result);    	
	}

	public static function givepeople($givendate){
		$date = Array();
    	array_push($date, $givendate);
    	$appoints = new Ecounseling();
    	return $result=$appoints->getspefapp($date);
	}

	public function addapp(Request $request){
    	$appoints = new Ecounseling();
		$result=$appoints->createapp($request->except('_token'));
		
		//return redirect()->route('appointments');
	}

	public static function retapppsych($id){
		$patid=Array();
		array_push($patid, $id);
    	$appoints = new Ecounseling();
		$result=$appoints->getapppsych($patid);
		return $result;
	}

	public function cancelapp(Request $request){
    	$appoints = new Ecounseling();
		$result=$appoints->cancelappnt($request->except('_token'));
		return redirect()->route('appointments');
	}

	public static function getpatients(){
    	$appoints = new Ecounseling();
		$result=$appoints->getpatients();
		return $result;
	}

	public function addpostapp(Request $request){
    	$appoints = new Ecounseling();
		$result=$appoints->createapp($request->except(['_token','patmsg']));

		$id = DB::table('conversations')->insertgetId(
			['psych_id' => $request->psych_id, 'pat_id' => $request->pat_id]);
			$msg = "Patient blahblah wants you to be his psychologist <br><br> Patient:".$request->patmsg;
			DB::table('messages')->insert(
				['msg_content' => $msg, 
				'sender' => 0,
				'convo_id' => $id,
				 "created_at" =>  \Carbon\Carbon::now()]);
			$msg2 = "Your first session will be on ".$request->counsel_date. ' at '.date("H:M a",strtotime($request->counsel_time));
			DB::table('messages')->insert(
				['msg_content' => $msg2, 
				'sender' => 0,
				'convo_id' => $id,
				 "created_at" =>  \Carbon\Carbon::now()]);
			return redirect()->route('profile');   
	}
}
