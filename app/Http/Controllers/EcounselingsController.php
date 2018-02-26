<?php

namespace App\Http\Controllers;

date_default_timezone_set('Asia/Hong_Kong');
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\PatientsController;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Ecounseling;
use Session;
use Auth;

class EcounselingsController extends Controller
{
    public function viewspefecoun(){
    	$date = Array();
    	array_push($date, Input::post('date'));
    	array_push($date, Auth::user()->id);
    	$appoints = new Ecounseling();
    	$result=$appoints->getspefapp($date);
    	return view('comp.appointmentstab')->with('appoints', $result);    	
	}

	public static function viewspefecounn($datee){
    	$date = Array();
    	array_push($date, $datee);
    	array_push($date, Auth::user()->id);
    	$appoints = new Ecounseling();
    	$result=$appoints->getspefapp($date);
    	return $result;    	
	}
	
	public static function viewspefecounnn($datee,$id){
    	$date = Array();
    	array_push($date, $datee);
    	array_push($date, $id);
    	$appoints = new Ecounseling();
    	$result=$appoints->getspefapp($date);
    	return $result;    	
	}

	public static function givepeople($givendate){
		$date = Array();
    	array_push($date, $givendate);
    	array_push($date, Auth::user()->id);
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

	public static function getpatients($id){
    	$appoints = new Ecounseling();
		$result=$appoints->getpatients($id);
		return $result;
	}

	public function addpostapp(Request $request){
    	//$appoints = new Ecounseling();
		//$result=$appoints->createapp($request->except(['_token','patmsg']));

		$result = DB::table('ecounselings')->insertGetId($request->except(['_token','patmsg']));

		$id = DB::table('conversations')->insertgetId(
			['psych_id' => $request->psych_id, 'pat_id' => $request->pat_id]);
			$msg = "Patient blahblah wants you to be his psychologist <br><br> Patient:".$request->patmsg;
			DB::table('messages')->insert(
				['msg_content' => $msg, 
				'sender' => 0,
				'convo_id' => $id,
				 "created_at" =>  \Carbon\Carbon::now()]);
			$msg2 = "Your first session will be on ".$request->counsel_date. ' at '.date("H:M a",strtotime($request->counsel_time))."<br><form method='GET' action='approvebook'><input type='hidden' name='psych_id' value='".$request->psych_id."'><input type='hidden' name='pat_id' value='".$request->pat_id."'><input type='hidden' name='counsel_id' value='".$result."'><input type='submit' value='Approve'/></form>";
			DB::table('messages')->insert(
				['msg_content' => $msg2, 
				'sender' => 0,
				'convo_id' => $id,
				 "created_at" =>  \Carbon\Carbon::now()]);
			return redirect()->route('ecounseling');   
	}

	function approvepat(Request $request){

		DB::table('ecounselings')
            ->where('counsel_id', $request->counsel_id)
			->update(['counsel_status' => "active",
			]);
		DB::table('patients')
            ->where('pat_id', $request->pat_id)
			->update(["psych_id" => $request->psych_id,
			]);
	}

	static function addnotes($idd){
		
		$id = DB::table('psych_notes')->insertgetId(
			['session_notes' => "",
				'notes_time' => date("H:m"),
				'notes_date' => date("Y-m-d"),
				'pat_id' => $idd]);
			session(['notes_id' => $id]);
	}

	static function updatenotes(Request $request){
		$id = session('notes_id');
		$pat = session('pat_id');
		DB::select("UPDATE psych_notes SET session_notes = ?, pat_id = ? WHERE notes_id = ?", [$request->notes,$pat,$id]);

		if(empty($request->notes))
		return "Wala!";
		else 
		return "Naa brad!";
	}

	static function getnotes($id){
		return DB::select("SELECT * FROM psych_notes WHERE pat_id = ?", [$id]);
	}

	function addvideoid(Request $request){
		DB::table('videoids')->insert([
			"address" => $request->address,
			"id" => Auth::user()->id,
		]);
	}

	static function retvideoid($id){
		return DB::select("SELECT * FROM videoids WHERE id = ?", [$id]);
	}
	static function deletevidid(){
		DB::table('videoids')->truncate();
	}

	static function getspefnotes($id){
		return DB::select("SELECT * FROM psych_notes WHERE notes_id = ?", [$id]);
	}

}
