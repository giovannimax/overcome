<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Availability extends Model
{
    public function createavail($data){
    	return DB::table('blocked_dates')->insert([$data]);
    }

    public function getavailspefdate($date){
    	return DB::select("SELECT * FROM blocked_dates WHERE blocked_date = ?", $date);
    }

    public function deleteavail($date){
    	return DB::select("DELETE FROM blocked_dates WHERE blocked_date = ?", $date);
    }
}
