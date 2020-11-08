<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
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
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'alamat2' => ['required', 'string','string', 'max:255'],
            'tglahir' => ['required', 'string', 'string', 'max:255'],
            'pekerjaan' => ['required', 'string', 'string', 'max:255'],
            'pendidikan' => ['required', 'string', 'string', 'max:255'],
            'phone2' => ['required', 'string', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'username' => ['required', 'string', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'KTP' => ['required', 'string', 'string', 'max:255'],
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
            'name' => ['required', 'string', 'max:255'],
            'alamat2' => $data['alamat2'],
            'tglahir' => $data['tglahir'],
            'pekerjaan' => $data['pekerjaan'],
            'pendidikan' => $data['pendidikan'],
            'phone2' => $data['phone2'],
            'email' => $data['email'],
            'username' => $data['username'],
            'password' => Hash::make($data['password']),
            'KTP' => $data['KTP'],
        ]);
    }
}
