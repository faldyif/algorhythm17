<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

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
    protected $redirectTo = '/home';

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
        if($data['type'] == 1) {
            // If short film contest
            return Validator::make($data, [
                'name' => 'required|max:255',
                'email' => 'required|email|max:255|unique:users',
                'password' => 'required|min:6',
                'team_name' => 'required|max:255',
                'phone' => 'required|max:255',
                'from_instance' => 'required|max:255',
                'submitting_slot' => 'required',
            ]);
        } else if ($data['type'] == 2) {
             // If instagram contest
        } else {
            // If concert account
            return Validator::make($data, [
                'name' => 'required|max:255',
                'email' => 'required|email|max:255|unique:users',
                'password' => 'required|min:6',
                'phone' => 'required|max:255',
                'from_instance' => 'required|max:255',
            ]);
        }
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        if($data['type'] == 1) {
            $user = User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => bcrypt($data['password']),
                'role_id' => '1',
                'from_instance' => $data['from_instance'],
                'phone' => $data['phone'],
                'paid_amount' => 0,
            ]);
            \App\ShortFilmUser::create([
                'user_id' => $user->id,
                'team_name' => $data['team_name'],
                'submitting_slot' => $data['submitting_slot'],
            ]);
            return $user;
        } else if ($data['type'] == 2) {
            
        } else {
            // If concert account
            return User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => bcrypt($data['password']),
                'role_id' => '3',
                'from_instance' => $data['from_instance'],
                'phone' => $data['phone'],
                'paid_amount' => 0,
            ]);
        }
    }
}
