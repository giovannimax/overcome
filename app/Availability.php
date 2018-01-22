<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Availability extends Model
{
    public function createavail($data){
    	return DB::table('availabilities')->insert([$data]);
    }

    public function getavailspefdate($date){
    	return DB::select("SELECT * FROM availabilities WHERE blocked_date = ?", $date);
    }
}
