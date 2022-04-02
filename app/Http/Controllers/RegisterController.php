<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Route;
use Illuminate\Support\Facades\Auth;
use App\Providers\AppServiceProvider;
use App\Models\User;
use App\Models\Notification;

require '../vendor/autoload.php';
use Aws;
use Mailgun\Mailgun;



class RegisterController extends Controller
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
     * Show the form to register a new account.
     *
     * @return \Illuminate\View\View
     */

    public function createRegister()
    {
        return view('/emg-main/web/MalexHTML/App/dist/registration');
    }


       /**
     * register validated user to dashboard.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function authenticate(Request $request)
    {

        // validator pipeline unique:users not working for unique email

        $attributes =  $request->validate([
            'email'=> 'required|email|max:255|unique:users',
            'password' => 'required|min:7|max:255'
        ]);


        $user = User::create($attributes);

        auth()->login($user);


              # Instantiate the client.
            $mgClient = Mailgun::create('fd00846c1f2fff1319fd0a375c8825e9-cac494aa-53c6b775'); // For US servers
            $domain = "mg.emgbusinessconsulting.com";
            $params = array(
            'from'    => 'egreen@emgbusinessconsulting.com',
            'to'      => $user->email,
            'subject' => 'Hello',
            'text'    => 'Thanks for signing up in our app!'
            );

             # Make the call to the client.
            $mgClient->messages()->send($domain, $params);


        $notification1 = [
            'user_id' =>Auth::id(),
            'title' => 'New Client Information Document',
            'body' =>'View our business portal for more information.'];

        $notification2 = [
            'user_id' =>Auth::id(),
            'title' => 'Tax Season Is Approaching',
            'body' =>'Would you like to get started on your tax preparation'];

        Notification::create($notification1);
        Notification::create($notification2);


        $request->session()->regenerate();

        return redirect('/dashboard');

    }
}
