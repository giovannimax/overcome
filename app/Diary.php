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
        return DB::table('diaries')->get()->where('pat_id','=',$id);
    }
}
