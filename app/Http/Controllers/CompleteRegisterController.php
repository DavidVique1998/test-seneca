<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use register users
use App\Http\Controllers\Auth\RegisterController;
//Route service provider
use App\Providers\RouteServiceProvider;

class CompleteRegisterController extends Controller
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

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

        /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('verified');
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
            'surnames' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'date_of_birth' => ['required', 'date', 'after:1900-01-01', 'before:today'],
        ]);
    }

    public function index()
    {
        return view('auth.complete-register');
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function update(array $data)
    {
        return Auth::user()->update([
            'name' => $data['name'],
            'surnames' => $data['surnames'],
            'address' => $data['address'],
            'date_of_birth' => $data['date_of_birth'],
        ]);
    }
}
