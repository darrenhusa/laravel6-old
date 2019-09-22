<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function show()
    {
      $post = Post::all()->first();
      // dd($post);
      // $post = 'first-post';
      // dd($post);
      // return 'hello';
      return view('post', [
        'post' => $post,
      ]);
    }
}
