<?php

namespace App\Http\Controllers\Peek;

use App\ApplicationCore\DTOs\Post as DTOsPost;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Models\Post;
use App\Models\Like;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;

class FeedController extends Controller
{
    public function feed()
    {
        $posts = Post::orderBy('id', 'DESC')->get();
        return $posts;
    }
    public function feed2()
    {
        $datos = [];
        for ($i = 0; $i < 20; $i++) {
            $post = Post::orderBy('id', 'DESC')->offset($i)->first();
            if ($post) {
                $usuario = User::find($post->user_id);
                $likes = Like::where('post_id', '=', $post->get('id'))->count();

                $wrapper = new DTOsPost();
                $wrapper->post = $post;
                $wrapper->user = $usuario;
                $wrapper->likes = $likes;

                array_push($datos, $wrapper);
            }
        }
        /*$posts = Post::orderBy('id', 'DESC')->first();
        $usuario = User::find($posts->get('user_id'));
        $likes = Like::where('post_id', '=', $posts->get('id'))->count();
        //$comments = Comment::where('post_id','=',$posts->get('id'))->get(1);
        $datos = ['posts' => $posts, 'usuario' => $usuario, 'likes' => $likes];*/
        // return $datos;
        // return view('home', compact('datos'));
        return view('home',['user_id' => Auth::id()])->with('datos', $datos);
    }
}
