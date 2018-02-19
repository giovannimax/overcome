<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class PatientsController extends Controller
{
    static function getspefpat($id){
        $row = DB::select("SELECT CONCAT(pat_fname,' ',pat_lname) as name FROM patients WHERE pat_id = $id");
        return $row;
    }
}
