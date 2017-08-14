<?php

namespace App\Http\Controllers;
use App\Post;

use Illuminate\Http\Request;

class PostsController extends Controller
{
  public function index() {
    $posts = Post::all();
    return view('posts.index', compact('posts'));
  }

  public function show($id) {
    $post = Post::find($id);
    return view('posts.show', compact($post));
  }

  public function new() {
    return view('posts.new');
  }

  public function create() {
    $post = Post::create(['title' => request('title'), 'body' => request('body')]);
    return redirect('/');
  }
}
