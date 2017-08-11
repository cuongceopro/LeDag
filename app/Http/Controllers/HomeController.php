<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

use App\Inquiry;
use App\Order;
use App\CartModel;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function inquiry($status){

      $inquiries = Inquiry::where('status', $status)->get();

      return View::make('manage.manage_inquiry')
      ->with('inquiries', $inquiries);
    }

    public function inquiry_detail($id)
    {
      $inquiry = Inquiry::find($id);
      return View::make('manage.manage_inquiry_detail')->with('inquiry', $inquiry);
    }

    public function inquiry_done($id)
    {

      $inquiry = Inquiry::find($id);
      $inquiry->status = 2;
      $inquiry->save();

      return redirect("/manage/inquiry/1");
    }

    public function inquiry_todo($id)
    {

      $inquiry = Inquiry::find($id);
      $inquiry->status = 1;
      $inquiry->save();

      return redirect("/manage/inquiry/1");
    }

    public function order($status){

      $orders = Order::where('status', $status)->get();

      return View::make('manage.manage_order')
      ->with('orders', $orders);
    }

    public function order_detail($id)
    {
      $order = Order::find($id);

      $carts = CartModel::where('order_id', $order->id)->get();

      return View::make('manage.manage_order_detail')->with('order', $order)->with('carts', $carts);
    }

    public function order_done($id)
    {

      $order = Order::find($id);
      $order->status = 2;
      $order->save();

      return redirect("/manage/order/1");
    }

    public function order_todo($id)
    {

      $order = Order::find($id);
      $order->status = 1;
      $order->save();

      return redirect("/manage/order/1");
    }

}
