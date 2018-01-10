<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\DB;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function addpsych($data){
        DB::table('psychologists')->insert($data);
        DB::table('users')->where('id', $data['psych_id'])->update(['usertype' => 'psych']);
    }
    public function addpat($data){
        DB::table('patients')->insert($data);
        DB::table('users')->where('id', $data['pat_id'])->update(['usertype' => 'pat']);
    }
}
