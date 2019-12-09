<?php 
namespace App\ApplicationCore\DTOs;

/**
 * 'Post' refers to Photos and its comments and Hashtags
 * 
 */
class Post
{
    
    var $post =null;
    var $user = null;
    var $likes = 0;

    // Timestamp
    var $created_at;
    var $updated_at;
}


?>