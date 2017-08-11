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
use Validator;
use Input;

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

}
