<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	protected $table = 'posts';

	protected $fillable = ['photo', 'description', 'hashtags', 'user_id'];

	/**
	 * Get the comments for the post.
	 */
	public function comments()
	{
		return $this->hasMany('App\Models\Comment');
	}

	/**
	 * Get the likes for the post.
	 */
	public function likes()
	{
		return $this->hasMany('App\Models\Like');
	}

	/**
	 * Get the users who liked the post.
	 */
	public function users_who_liked()
	{
		return $this->belongsToMany(User::class, 'likes', 'post_id', 'user_id');
	}

	/**
	 * Get the users who commented the post.
	 */
	public function users_who_commented()
	{
		return $this->belongsToMany(User::class, 'comments', 'post_id', 'user_id');
	}
}
