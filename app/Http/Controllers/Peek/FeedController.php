<?php

namespace App\Http\Controllers\Peek;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Models\Post;
use App\Models\Like;
use App\Models\Comment;

class FeedController extends Controller
{
    public function feed()
	{
        $posts = Post::orderBy('id', 'DESC')->get();
        return $posts;
	}
  public function feed2()
{
      $posts = Post::orderBy('id', 'DESC')->first();
      $usuario = User::find($posts->get('user_id'));
      $likes = Like::where('post_id','=',$posts->get('id'))->count();
      //$comments = Comment::where('post_id','=',$posts->get('id'))->get(1);
      $datos = ['posts' => $posts, 'usuario' => $usuario,'likes' => $likes];
      // return $datos;
      // return view('home', compact('datos'));
      return view('home')->with('datos', $datos);
}
}
