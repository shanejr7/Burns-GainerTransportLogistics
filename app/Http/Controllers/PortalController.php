<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Quote;
use App\Models\Order;
use App\Models\Address;
use App\Models\Shipping;
use App\Models\Country;
use App\Models\State;
use App\Models\Freight;
use App\Models\Cargo;
use App\Models\Product;
use App\Models\Package;
use App\Models\ProductCategory;
use App\Models\Subscription;
use App\Models\Notification;


require '../vendor/autoload.php';
use Aws;
use Mailgun\Mailgun;



class PortalController extends Controller
{


    /**
     * admin page.
     *
     * @return \Illuminate\View\View
     */

    // public function createAdmin()
    // {


    //     return view('/emg-main/web/MalexHTML/App/dist/admin-notifications',['notifications' => Notification::where('user_id','=',Auth::id())->get()]);
    // }

     /**
     * admin account overview page.
     *
     * @return \Illuminate\View\View
     */

     public function adminAccount()
     {
        // merge address with orders

        return view('transaero-transport-logistics-html-template/html/admin')->with(['quotes' => Quote::all()])->with(['orders' => User::join('orders','orders.client_id','=','users.id')->where('orders.status','!=','Completed')->get()])->with(['orders_history' => User::join('orders','orders.client_id','=','users.id')->where('orders.status','like','%Completed%')->get()]);

    }


      /**
     * admin quotes overview page.
     *
     * @return \Illuminate\View\View
     */

      public function adminQuotes()
      {

        return view('transaero-transport-logistics-html-template/html/admin_quotes')->with(['quotes' => Quote::all()])->with(['orders' => User::join('orders','orders.client_id','=','users.id')->where('orders.status','!=','Completed')->get()])->with(['orders_history' => User::join('orders','orders.client_id','=','users.id')->where('orders.status','like','%Completed%')->get()]);

    }


       /**
     * client account overview page.
     *
     * @return \Illuminate\View\View
     */

       public function clientAccount()
       {

           if (auth()->guest()) {
            abort(403);
            
        }

        return view('transaero-transport-logistics-html-template/html/dashboard',['quotes' => Quote::where('client_id','=',Auth::id())->get()],['orders' => Order::where('client_id','=',Auth::id())->get()]);

    }




       /**
     * admin update order location.
     *
     * @return \Illuminate\View\View
     */

       public function updateOrderLocation(Request $request)
       {

         $attributes =  $request->validate([
            'shipping_address' => 'required',
            'order_id' => 'required|numeric'
        ]);

         $order_id = $request->input('order_id');

         $order_shipping_address = $request->input('shipping_address');

         $order = Order::where('id', '=', $order_id)->find($order_id);

         $order->shipping_address = $order_shipping_address;

         $order->save();

         return redirect()->back()->with(['quotes' => Quote::all()])->with(['orders' => User::join('orders','orders.client_id','=','users.id')->where('orders.status','!=','Completed')->get()])->with(['orders_history' => User::join('orders','orders.client_id','=','users.id')->where('orders.status','like','%Completed%')->get()]);
     }



       /**
     * admin update order location.
     *
     * @return \Illuminate\View\View
     */

       public function updateOrderComplete(Request $request)
       {

         $attributes =  $request->validate([
            'order_id' => 'required|numeric'
        ]);

         $order_id = $request->input('order_id');

         $order = Order::where('id', '=', $order_id)->find($order_id);

         $order->shipping_address = $order->address;

         $order->status = 'Completed';

         $order->save();

         return redirect()->back()->with(['quotes' => Quote::all()])->with(['orders' => User::join('orders','orders.client_id','=','users.id')->where('orders.status','!=','Completed')->get()])->with(['orders_history' => User::join('orders','orders.client_id','=','users.id')->where('orders.status','like','%Completed%')->get()])->with('success', 'Order completed!!!');
     }


     /**
     * admin view clients page.
     *
     * @return \Illuminate\View\View
     */

    //  public function viewClients()
    //  {


    //     return view('/emg-main/web/MalexHTML/App/dist/admin-clients',['notifications' => Notification::where('user_id','=',Auth::id())->get()],['client' => Clients::all()]);
    // }


    /**
     * admin view tax submission page.
     *
     * @return \Illuminate\View\View
     */

//     public function viewTaxSubmission()
//     {

//         $dependents = Dependents::latest('created_at')->get();

//         $questionnaires = Questionnaires::latest('created_at')->get();
//         $questionnaires = $questionnaires->toArray();

//         $documentation = Documentations::latest('created_at')->get();
//         $documentation = $documentation->toArray();


//         $s3=" ";
//         $s3 = new Aws\S3\S3Client([
//             'version'  => 'latest',
//             'region'   => 'us-east-1',
//         ]);




//         return view('/emg-main/web/MalexHTML/App/dist/admin-taxes',['notifications' => Notification::where('user_id','=',Auth::id())->get()],['taxpayer' => Taxpayer::latest('created_at')->get()])->with('questionnaires',$questionnaires)->with('dependents',$dependents)->with('documentations',$documentation)->with('s3',$s3);
    

//     }


       /**
     * show guest quote checkout page.
     *
     * @return \Illuminate\View\View
     */


       public function showGuestQuoteCheckout($private_key)
       {

        $private_key = filter_var($private_key, FILTER_SANITIZE_STRING);

        $quote = Quote::where('private_key','=',$private_key)->get();


        if(sizeof($quote)!=0){

           return view('transaero-transport-logistics-html-template/html/guest_quote_checkout')->with('private_key', $private_key)->with('quotes',$quote);

       }else{


        return view('transaero-transport-logistics-html-template/html/index');

    }



}

      /**
     * show guest order page.
     *
     * @return \Illuminate\View\View
     */


      public function showGuestOrder($private_key)
      {

        $private_key = filter_var($private_key, FILTER_SANITIZE_STRING);

        $order = Order::where('private_key','=',$private_key)->where('client_id','=',null)->get();


        if(sizeof($order)!=0){

          return view('transaero-transport-logistics-html-template/html/guest_order')->with('private_key', $private_key)->with('orders',$order);

      }else{


        return view('transaero-transport-logistics-html-template/html/index');

    }



}



       /**
     * guest accept quote estimate.
     *
     * @return \Illuminate\View\View
     */

       // add stripe payment
       // email user / admin
       public function guestAcceptQuoteEstimate(Request $request)
       {

        $quote_id = $request->input('quote_id');

        $quote = Quote::where('id','=',$quote_id)->find($quote_id);

        $quote->active = 3;

        $private_key = $this->randomString();

        $quote->private_key = $private_key;

        $quote->save();

        $quote = Quote::where('id','=',$quote_id)->get();


        if(sizeof($quote)!=0){

            return redirect()->route('guestcheckout', ['authString' => $private_key])->with('success', 'Order sent!!!');

        }else{
            return view('transaero-transport-logistics-html-template/html/index');

        }



    }



       /**
     * start quote order.
     *
     * @return \Illuminate\View\View
     */

       // email user
       public function submitQuoteOrder(Request $request)
       {

          $attributes =  $request->validate([
            'quote_id' => 'required|numeric',
        ]);

          $quote_id = $request->input('quote_id');


          $quote = Quote::where('id','=',$quote_id)->find($quote_id);

          $private_key = $this->randomString();

          $order = new Order();

          if (isset($quote->client_id)) {

              $order->client_id = $quote->client_id;
          }

          $order->category_id = $quote->category_id;


          // client address
          // $address = new Address();
          // $address->full_address=$quote->destination;
          // $address->save();
          // $order->address_id = $address->id;
          // $order->billing_id = $address->id;


          // dynamnic shipping address
          // $address = new Address();
          // $address->full_address=$quote->location;
          // $address->save();
          // $order->shipping_address_id = $address->id;


          $order->address = $quote->destination;
          $order->billing_address = $quote->destination;

          $order->shipping_address = $quote->location;


          $order->order_tracking_number =  $this->randomString();
          $order->total_quantity = 1;
          $order->total_price = $quote->total_price;
          $order->status = 'Shipping';
          $order->private_key = $private_key;

          $order->save();
          $order = Order::where('id','=',$order->id)->find($order->id);

          $quote->where('id','=', $quote_id)->delete();


          if(isset($order)){

            return redirect()->back()->with(['quotes' => Quote::all()])->with(['orders' => User::join('orders','orders.client_id','=','users.id')->where('orders.status','!=','Completed')->get()])->with(['orders_history' => User::join('orders','orders.client_id','=','users.id')->where('orders.status','like','%Completed%')->get()])->with('success', 'Order started!!!');

        }else{

         return redirect()->back()->withErrors();

     }



 }




    /**
     * admin submit estimate quote.
     *
     * @return \Illuminate\View\View
     */

    public function submitQuoteEstimate(Request $request)
    {


        $attributes =  $request->validate([
            'price' => 'required|numeric',
            'quote_id' => 'required|numeric',
        ]);

        if ($attributes) {

            $quote_id = $request->input('quote_id');


            $quote = Quote::where('id','=',$quote_id)->find($quote_id);
            $quote->active = 2;
            $quote->total_price = $request->input('price');

            $quote->save();


               # Instantiate the client.
            // $mgClient = Mailgun::create('fd00846c1f2fff1319fd0a375c8825e9-cac494aa-53c6b775'); // For US servers
            // $domain = "mg.emgbusinessconsulting.com";
            // $params = array(
            // 'from'    => 'egreen@emgbusinessconsulting.com',
            // 'to'      => Auth::user()->email,
            // 'subject' => 'Hello',
            // 'text'    => 'your tax refund amount and filing fee is ready for processing!'
            // );

            //  # Make the call to the client.
            // $mgClient->messages()->send($domain, $params);


            return redirect()->back()->with('success', 'Estimate sent!!!');



        }


        return redirect()->back()->withErrors();
    }





    /**
     * Show dashboard account for client or admin.
     *
     * @return \Illuminate\View\View
     */
    public function createDashboard()
    {

        if (auth()->guest()) {
            abort(403);
            
        }


        if (auth()->user()->is_admin != true) {

            return redirect()->route('clientAccount');
        }

        if (auth()->user()->is_admin == true) {

            return redirect()->route('adminAccount');

        }

        return redirect()->back()->withErrors();

    }

        /**
     * user subscribe.
     *
     * @return \Illuminate\View\View
     */

        public function subscribeUser(Request $request)
        {


          $attributes =  $request->validate([
            'subscribe' => 'required|required|email|max:255|unique:subscription',
        ]);


          if ($attribute) {

            $subscribe = new Subscription();
            $subscribe->email = $request->input('subscribe');

            $subscribe->save();


            return redirect()->back()->with('success', 'You have been subscribed!!!');

        }

        return redirect()->back()->withErrors();

    } 



    /**
     * Remove user notification.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function removeUserNotification(Notification $notification)
    {

        if (auth()->guest()) {
            abort(403);
            
        }

        if ($notification->where('user_id','=',Auth::id())->where('id','=',$notification->id)->delete())
        {

            return redirect('/dashboard');
        }

        return redirect()->back()->withErrors();
    }


    /**
     * validated quote form.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function clientQuoteSubmission(Request $request)
    {

     $request['email']= strtolower($request->input('email'));

     $attributes =  $request->validate([
        'client_id'=>'numeric',
        'name' => 'required|min:3|max:25',
        'phone' => 'required|digits:10',
        'email' => 'required|email|max:255',
        'location' => 'required|max:255',
        'destination' => 'required|max:255',
        'category' =>'required',
        'message' =>'required|max:255',
    ]);

       // save random user info if no client id
     if(!isset($request->input('client_id'))){

        $email = $request->input('email');

        $user = User::where('email','=',$email)->get();

        if (!isset($user)) {

          $user = new User();

          $user->is_admin = false;
          $user->name = $request->input('name');
          $user->phone = $request->input('phone');
          $user->email = $request->input('email');
          $user->password = $this->randomString();
          $user = User::create($user);

      }

  }

  if ($attributes) {


    $quote = new Quote();

    $quote->active = 1;
    $quote->client_id = $request->input('client_id');
    $quote->name = $request->input('name');
    $quote->phone = $request->input('phone');
    $quote->email = $request->input('email');
    $quote->location = $request->input('location');
    $quote->destination = $request->input('destination');
    $quote->category_id = $request->input('category');
    $quote->message = $request->input('message');


    $quote->private_key = $this->randomString();


    $quote->save();

    $request->session()->regenerate();

    return redirect()->back()->with('success', 'your quote was sent!'); 


        //        # Instantiate the client.
        //     $mgClient = Mailgun::create('fd00846c1f2fff1319fd0a375c8825e9-cac494aa-53c6b775'); // For US servers
        //     $domain = "mg.emgbusinessconsulting.com";
        //     $params = array(
        //     'from'    => 'egreen@emgbusinessconsulting.com',
        //     'to'      => 'egreen@emgbusinessconsulting.com',
        //     'subject' => 'Hello',
        //     'text'    => 'A client submitted a business form request!'
        //     );

        //      # Make the call to the client.
        //     $mgClient->messages()->send($domain, $params);


}else{

    return redirect()->to('/#formArea')->withErrors(['name' => 'required|min:3|max:25',
        'phone' => 'required|digits:10',
        'email' => 'required|email|max:255',
        'location' => 'required|max:255',
        'destination' => 'required|max:255',
        'category' =>'required',
        'message' =>'required|max:255',
    ]);

}



}

          /**
     * user tax approved.
     *
     * @return \Illuminate\View\View
     */

    //       public function approveTaxRequest(Request $request)
    //       {

    //         if (auth()->guest()) {
    //             abort(403);

    //         }

    //         $user_id = Auth::id();
    //         $attribute = $user_id;


    //         if ($attribute) {

    //             $taxpayer = Taxpayer::where('user_id','=',$user_id)->first();
    //             $taxpayer->tax_submission_status = "Approved";

    //             $taxpayer->save();

    //               # Instantiate the client.
    //         $mgClient = Mailgun::create('fd00846c1f2fff1319fd0a375c8825e9-cac494aa-53c6b775'); // For US servers
    //         $domain = "mg.emgbusinessconsulting.com";
    //         $params = array(
    //             'from'    => 'egreen@emgbusinessconsulting.com',
    //             'to'      => 'egreen@emgbusinessconsulting.com',
    //             'subject' => 'Hello',
    //             'text'    => 'a tax application was approved by a client for refund & filing!'
    //         );

    //          # Make the call to the client.
    //         $mgClient->messages()->send($domain, $params);

    //         return redirect()->route('TaxPortal');

    //     }

    //     return redirect()->back()->withErrors();

    // } 



       /**
     * random string generated.
     *
     * @return \Illuminate\View\View
     */
       public function randomString(){

           $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
           $charactersLength = strlen($characters);
           $private_key = '';

           for ($i = 0; $i < 20; $i++) {
            $private_key .= $characters[rand(0, $charactersLength - 1)];
        }

        return $private_key;


    }

    
}
