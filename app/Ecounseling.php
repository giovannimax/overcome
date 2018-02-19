<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Ecounseling extends Model
{
    public function getspefapp($date){
    	return DB::select("SELECT * FROM ecounselings WHERE counsel_date = ? AND counsel_status = 'active'ORDER BY counsel_time ASC", $date);
    }

    public function getapppsych($id){
        return DB::select("SELECT * FROM ecounselings WHERE pat_id = ? AND counsel_status = 'active'ORDER BY counsel_time ASC", $id);
    }

    public function createapp($data){
    	return DB::table('ecounselings')->insert([$data]);
    }

    public function cancelappnt($id){
        return DB::table('ecounselings')->where('counsel_id',$id)->update(['counsel_status' => 'canceled']);
    }
   
}
