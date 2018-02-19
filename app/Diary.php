<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Diary extends Model
{
    function adddiary($data){
        DB::table('diaries')->insert($data);
    }

    function getdiaries($id){
        return DB::table('diaries')->orderBy('dia_date','desc')->get()->where('pat_id','=',$id);
    }

    function updatediary($data){
            return DB::select("UPDATE diaries SET dia_content = ? , dia_time = ? WHERE dia_id = ?", $data);
    }
}
