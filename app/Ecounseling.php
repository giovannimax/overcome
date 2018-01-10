<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Ecounseling extends Model
{
    public function getspefapp($date){
    	return DB::select("SELECT * FROM ecounselings WHERE counsel_date = ? ORDER BY counsel_time ASC", $date);
    }
   
}
