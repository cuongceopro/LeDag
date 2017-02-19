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
      return View::make('index')->with('posts', $posts);
    }

    public function detail($id)
    {
	    $post = Post::find($id);
      return View::make('single')->with('post', $post);
    }

}
