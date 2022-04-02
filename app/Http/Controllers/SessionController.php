<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
     /**
     * construct middleware to guest
     *
     *
     */

    public function __construct(){
        $this->middleware('auth');
    }

       /**
     * log out auth user & destroy session.
     *
     * @param void
     * 
     */

    public function destroy(){

        auth()->logout();

        // $request->session()->invalidate();

        // $request->session()->regenerateToken();

        return redirect('/login');

    }
}
