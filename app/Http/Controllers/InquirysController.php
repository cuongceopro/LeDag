<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\View;
use Request;
//use Illuminate\Http\Request;
use Redirect;

use App\Inquiry;
use App\CartModel;
use App\Order;
use Validator;
use Input;

use \Cart as Cart;

class InquirysController extends BaseController
{

  public function contact_done()
  {
    return View::make('contact_done');
  }

    public function store(Request $request)
    {
      $rules = [
        'name_roma' => 'required',
        'tel' => 'required',
        'email' => 'required',
      ];

      $messages = array(
        'name_roma.required' => '名前(漢字)を入力してください。',
        'tel.required' => '電話番号を入力してください。',
        'email.required' => 'メールアドレスを入力してください。',
      );

      $validator = Validator::make(Request::all(), $rules, $messages);

      if ($validator->passes()) {
        $inquiry = new Inquiry;
        $inquiry->status = 1;
        $inquiry->name_roma = Request::input('name_roma');
        $inquiry->name_kana = Request::input('name_kana');
        $inquiry->address_1 = Request::input('address_1');
        $inquiry->address_2 = Request::input('address_2');
        $inquiry->tel = Request::input('tel');
        $inquiry->email = Request::input('email');
        $inquiry->requirement = Request::input('requirement');
        $inquiry->daiichikibou = Request::input('daiichikibou');
        $inquiry->numbers_people = Request::input('numbers_people');
        $inquiry->have_gone = Request::input('have_gone');
        $inquiry->detail = Request::input('detail');
        $inquiry->save();
        return redirect('/contact_done');
      }else{
        return Redirect::back()
        ->withErrors($validator)
        ->withInput();
      }
    }

    public function store_database(Request $request)
    {
      $rules = [
        'name_kanji' => 'required',
        'email' => 'required',
        'address_1' => 'required',
        'address_2' => 'required',
        'tel' => 'required',
        'pay' => 'required',
      ];

      $messages = array(
        'name_kanji.required' => '名前(漢字)を入力してください。',
        'email.required' => 'メールアドレスを入力してください。',
        'address_1.required' => 'ご住所(都道府県)を入力してください。',
        'address_2.required' => 'ご住所(市区町村以下)を入力してください。',
        'tel.required' => '電話番号を入力してください。',
        'pay.required' => 'お支払い方法を選択してください。',
      );

      $validator = Validator::make(Request::all(), $rules, $messages);

      if ($validator->passes()) {

        if ( Order::all() == null){
          $max = 0;
        }
        else {
          $max = Order::max('id');
        }

        $order_id = $max + 1;

        foreach (Cart::content() as $item){
          $cart = new CartModel;
          $cart->order_id = $order_id;
          $cart->good_code = $item->options->code;
          $cart->cost = $item->price;
          $cart->number = $item->qty;
          $cart->subtotal = $item->subtotal;
          $cart->save();
        }

        $order = new Order;
        $order->id = $order_id;
        $order->status = 1;
        $order->name_kanji = Request::input('name_kanji');
        $order->name_kana = Request::input('name_kana');
        $order->email = Request::input('email');
        $order->address_1 = Request::input('address_1');
        $order->address_2 = Request::input('address_2');
        $order->tel = Request::input('tel');
        $order->pay = Request::input('pay');
        $order->other = Request::input('other');
        $order->total = Request::input('total');
        $order->save();

        return redirect('/cart_done');
      }else{
        return Redirect::back()
        ->withErrors($validator)
        ->withInput();
      }
    }

}
