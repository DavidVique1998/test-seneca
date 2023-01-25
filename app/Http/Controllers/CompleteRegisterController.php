<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use register users
use App\Http\Controllers\Auth\RegisterController;
//Route service provider
use App\Providers\RouteServiceProvider;
// use complte register request
use App\Http\Requests\CompleteRegisterRequest;

use Illuminate\Support\Facades\Auth;

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
    protected function update(CompleteRegisterRequest $request)
    {
        Auth::user()->update($request->validated());
        return redirect()->route('home');
    }
}
