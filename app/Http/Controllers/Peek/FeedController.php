<?php

namespace App\Http\Controllers\Peek;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FeedController extends Controller
{
    public function feed()
	{
        $posts = Post::orderBy('id', 'DESC')->get();
        return $posts;
	}
}
