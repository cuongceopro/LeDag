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

use App\Post;
use Validator;
use Input;

class PostsController extends BaseController
{
    public function ledaq()
    {
      $posts = Post::all();
      return View::make('ledaq')->with('posts', $posts);
    }

    public function company()
    {
      return View::make('company');
    }

    public function pay()
    {
      return View::make('pay');
    }

    public function order()
    {
      return View::make('ordermade');
    }

    public function rental()
    {
      return View::make('rental');
    }

    public function shoppingguide()
    {
      return View::make('shoppingguide');
    }

    public function collection()
    {
      $category_posts = Post::where('cat_id', '1')->get();

      return View::make('collection')
        ->with('category_posts', $category_posts);

    }

    public function eventnews()
    {
      //$category_posts = Post::where('cat_id', '2')->get();
      $category_posts = Post::all();

      return View::make('eventnews')
        ->with('category_posts', $category_posts);

    }

    public function contact()
    {
      return View::make('contact');
    }

    public function shopping()
    {
      $posts = Post::all();
      return View::make('shopping')->with('posts', $posts);
    }



    public function detail($id)
    {
	    $post = Post::find($id);
      return View::make('single')->with('post', $post);
    }

    public function event_store(Request $request)
    {
      $rules = [
        'title' => 'required',
        'content_summary'=>'required',
        'content' => 'required'
      ];

      $messages = array(
        'title.required' => 'タイトルを正しく入力してください。',
        'content_summary.required' => '概要を正しく入力してください。',
        'content.required' => '本文を正しく入力してください。',
      );

      $validator = Validator::make(Request::all(), $rules, $messages);

      if ($validator->passes()) {
        $post = new Post;
        $post->title = Request::input('title');
        $post->content_summary = Request::input('content_summary');
        $post->content = Request::input('content');
        $post->cat_id = 1;
        $post->comment_count = 0;
        $post->save();
        return redirect("/eventnews")
        ->with('message', '投稿が完了しました。');
      }else{
        return Redirect::back()
        ->withErrors($validator)
        ->withInput();
      }
    }

    /*
    public function showCategory($id)
    {
      $category_posts = Post::where('cat_id', $id)->get();

      return View::make('category')
        ->with('category_posts', $category_posts);
    }
    */

    public function showCategory($id)
    {
      $category_posts = Post::where('cat_id', $id)->get();

      return View::make('category')
        ->with('category_posts', $category_posts);
    }

}
