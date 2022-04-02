<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Route;
use App\Providers\AppServiceProvider;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class LoginController extends Controller
{
     /**
     * construct middleware to guest
     *
     *
     */

    public function __construct(){
        $this->middleware('guest');
    }

    /**
     * Show the form to log in.
     *
     * @return \Illuminate\View\View
     */

    public function createLogin()
    {
        return view('/emg-main/web/MalexHTML/App/dist/login');
    }
    /**
     * log validated user to dashboard.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function authenticate(Request $request)
    {

        $attributes =  $request->validate([
            'email'=> 'required|email',
            'password' => 'required'
        ]);


        if (auth()->attempt($attributes)) {

            $request->session()->regenerate();
            
            return redirect('/dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.']);
    }

}
