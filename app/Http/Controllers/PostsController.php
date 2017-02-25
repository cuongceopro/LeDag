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
      return View::make('home')->with('posts', $posts);
    }

    public function company()
    {
      return View::make('company');
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

    public function store(Request $request)
    {
      $rules = [
        'title' => 'required',
        'content'=>'required',
        'cat_id' => 'required'
      ];

      $messages = array(
        'title.required' => 'タイトルを正しく入力してください。',
        'content.required' => '本文を正しく入力してください。',
        'cat_id.required' => 'カテゴリーを選択してください。',
      );

      $validator = Validator::make(Request::all(), $rules, $messages);

      if ($validator->passes()) {
        $post = new Post;
        $post->title = Request::input('title');
        $post->content = Request::input('content');
        $post->cat_id = Request::input('cat_id');
        $post->comment_count = 0;
        $post->save();
        return Redirect::back()
        ->with('message', '投稿が完了しました。');
      }else{
        return Redirect::back()
        ->withErrors($validator)
        ->withInput();
      }
    }

    public function create()
    {
      $post = Post::all();
      return View::make('create')->with('post', $post);
    }

    public function showCategory($id)
    {
      $category_posts = Post::where('cat_id', $id)->get();

      return View::make('category')
        ->with('category_posts', $category_posts);
    }
}
