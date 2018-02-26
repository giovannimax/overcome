<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Availability;
use DB;
use Auth;
use Redirect;
class AvailabilityController extends Controller
{
    function addavail(Request $request){
        foreach($request->input('dates') as $da){
            foreach($request->input('time') as $t){
                $timeavail = explode('-',$t);
                $avail = [
                    "blocked_date" => $da,
                    "start_time" => date("H:i", strtotime($timeavail[0])),
                    "end_time" => date("H:i", strtotime($timeavail[1]))
                ];

                $availl = new Availability();
    	        $availl->createavail($avail);
            }
        }

        return redirect()->route('calendar');
    }

    public static function updateavail($request,$da){
            foreach($request as $t){
                $timeavail = explode('-',$t);
                $avail = [
                    "blocked_date" => $da,
                    "start_time" => date("H:i", strtotime($timeavail[0])),
                    "end_time" => date("H:i", strtotime($timeavail[1]))
                ];

                $availl = new Availability();
    	        $availl->createavail($avail);
        }
    }

    public static function getavailspefdate($datee){
    	$date = Array();
    	array_push($date, $datee);
    	$availl = new Availability();
        $result=$availl->getavailspefdate($date);
        $finalavail = 0;
        foreach($result as $res){
            $start = date("H", strtotime($res->start_time));
            $end = date("H", strtotime($res->end_time));
            if($end == 0)
                $end=24;
           $finalavail+=($end - $start);
        }
        return $finalavail;
    	//return view('comp.appointmentstab')->with('appoints', $result);   	
    }
    
    public static function getspefdate($datee){
        $date = Array();
    	array_push($date, $datee);
        $availl = new Availability();
        $result=$availl->getavailspefdate($date);
        return $result;
    }

    public static function deleteavail($datee){
        $date = Array();
    	array_push($date, $datee);
        $availl = new Availability();
        $result=$availl->deleteavail($date);
    }

    public static function checkavail(){
        return Availability::all();
    }

    function addpsychavaila(Request $request){
    $days = $request->days;
        foreach($days as $d){
            DB::table('availabilities')->insert(
        ['day' => $d, 
            'start_time' => $request->start_time,
            'end_time' => $request->end_time,
            'psych_id' => Auth::user()->id
            ]);
        }
         return Redirect::back();
    }

    static function retpsychavaila($id){
       return DB::select("SELECT * FROM availabilities WHERE psych_id = ?", [$id]);
    }

    function deleteavaila(Request $request){
        DB::select("DELETE FROM availabilities WHERE avail_id = ?", [$request->id]);
        return Redirect::back();
    }

    static function getpsychavailaspefday($day){
       return DB::select("SELECT * FROM availabilities WHERE day = ?", [$day]);
    }
}   
