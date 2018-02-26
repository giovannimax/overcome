<?php
namespace App\Http\Controllers;

date_default_timezone_set('Asia/Hong_Kong');

use Illuminate\Support\Facades\DB;
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

    static function retpsych($id){
        return   DB::select("SELECT * FROM psychologists WHERE psych_id =?", [$id]); 
    }

    static function retpsychprof($id){
       $row = DB::select("SELECT * FROM psychologists WHERE psych_id =?", [$id]); 
        return  $row;
    }

    function updatepsych(Request $request){
        DB::table('psychologists')->where('psych_id',$request->psych_id)->update(array(
            'psych_fname'=>$request->psych_fname,
            'psych_mname'=>$request->psych_mname,
            'psych_lname'=>$request->psych_lname,
            'psych_gndr'=>$request->psych_gndr,
            'psych_dob'=>$request->psych_dob,
            'psych_email'=>$request->psych_email,
            'psych_telphone'=>$request->psych_telphone,
            'license_no'=>$request->license_no,
            'license_title'=>$request->license_title,
            'clinic_address'=>$request->clinic_address,
            'clinic_province'=>$request->clinic_province,
            'clinic_email'=>$request->clinic_email,
            'clinic_phone'=>$request->clinic_phone));
            return redirect()->route('accountsettings');
    }


    function updatepat(Request $request){
        DB::table('patients')->where('pat_id',$request->pat_id)->update(array(
            'pat_fname'=>$request->pat_fname,
            'pat_mname'=>$request->pat_mname,
            'pat_lname'=>$request->pat_lname,
            'pat_gndr'=>$request->pat_gndr,
            'pat_bdate'=>$request->pat_bdate,
            'birth_place'=>$request->birth_place,
            'ctznshp'=>$request->ctznshp,
            'religion'=>$request->religion,
            'educ_attain'=>$request->educ_attain,
            'occupation'=>$request->occupation));
            return redirect()->route('pat_accountsettings');
    }

    static function retpat($id){
        return DB::select("SELECT * FROM patients WHERE pat_id =?", [$id]); 
    }

    
    static function retdetails($id){
        return DB::select("SELECT * FROM users WHERE id =?", [$id]); 
    }

    static function countpsych(){
        return DB::table('psychologists')->count();
    }

    static function countpat(){
        return DB::table('patients')->count();
    }

    // static function statpsych($mnth){
    //     $getter = DB::select("SELECT * FROM users WHERE usertype = 'psych'");
    //     $ctr = 0;
    //     $datee = date("m",strtotime($mnth)).'-'.date('Y');
    //     echo $datee."asdf";
    //     foreach($getter as $get){
    //         echo date('m-Y',strtotime($get->created_at))."<br>";
    //         if(date('m-Y',strtotime($get->created_at))==$datee){
    //             $ctr="";
    //         }
    //     }
    //     return $ctr;
    // }


    
    function updatediary(Request $request){
        $appoints = new Diary();
        $data=Array();
        $time = date("G:i");
        array_push($data, $request->dia_content);
        array_push($data, $time);
        array_push($data, $request->dia_id);
        $appoints->updatediary($data);
        $id=$request->dia_id;
        return redirect()->route('diary')->with(['id' => $id]);
    }
    
    function addcomment(Request $request){
        $data=Array();
        array_push($data, $request->comment);
        array_push($data, $request->dia_id);
        DB::select("UPDATE diaries SET psych_comment = ? WHERE dia_id = ?", $data);
        return redirect()->route('ecounseling');
    }
}
