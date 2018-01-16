<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Session;
use App\Register;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/signup';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }

    protected function redusertype($user)
    {
        if($user=='psychologist'){
            return view('auth.psychregister');
        } else{
            return view('auth.patregister');
        }
    }

    protected function showRegistrationForm(){
        return view('auth.register');
    }

    protected function showRegistrationOptions(){
        return view('auth.registeroptions');
    }

    protected function registerpsych(Request $request){
        $userreg = new User();
        $userreg->addpsych($request->except('_token'));
        Session::put('usertype', 'psych');
        return redirect()->route('profile');
    }

    protected function registerpat(Request $request){
        $userreg = new User();
        $userreg->addpat($request->except('_token'));
        Session::put('usertype', 'pat');
        return redirect()->route('profile');
    }

    protected function validatepsych(array $data){
        return Validator::make($data, [
            'fname' => 'required|max:255',
            'mname' => 'required|max:255',
            'lname' => 'required|max:255',
        ]);
    }
}
