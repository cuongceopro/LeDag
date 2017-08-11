<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

use App\Inquiry;

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

        return view('manage.manage_inquiry');
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

}
