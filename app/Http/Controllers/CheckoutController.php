<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Order;
use Illuminate\Http\Request;
use Session;

class CheckoutController extends Controller
{
    private $customer, $order, $orderDetail;
    public function index()
    {
      return view('website.checkout.index');
    }

    public function newCashOrder(Request $request)
    {
        Customer::create([
            'name' =>$request->input('name'),
            'email' =>$request->input('email'),
            'mobile' =>$request->input('mobile'),
            'address' =>$request->input('address'),

        ]);
        return redirect()->back();

    //    $this->customer = new Customer();
    //    $this->customer->name         = $request->name;
    //    $this->customer->email        = $request->email;
    //    $this->customer->mobile       = $request->mobile;
    //    $this->customer->password     = bcrypt($request->mobile);
    //    $this->customer->save();

    //    $this->order = new Order();
    //    $this->order->customer_id              =  $this->customer->id;
    //    $this->order->order_date               =  date('Y-m-d');
    //    $this->order->order_timestamp          =  strtotime(date('Y-m-d'));
    //    $this->order->order_total              =  Session::get('order_total');
    //    $this->order->tax_total                =  Session::get('tax_total');
    //    $this->order->shipping_total           =  Session::get('shipping_total');
    //    $this->order->delivery_address         =  $request->delivery_address;
    //    $this->order->payment_type             =  $request->payment_type;
    //    $this->order->save();



    }
}
