<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show($post)
    {
      $post = 'first-post';
      // dd($post);
      // return 'hello';
      return view('post', [
        'post' => $post,
      ]);
    }
}
