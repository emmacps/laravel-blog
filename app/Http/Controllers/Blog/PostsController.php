<?php

namespace App\Http\Controllers\Blog\PostsController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostsController extends Controller{
    //

    public function show(Post $post){
      return view('blog.show')->with('post', $post);
    }
}
