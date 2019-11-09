<?php 
namespace App\ApplicationCore\DTOs;
/**
 * 'Post' refers to Photos and its comments and Hashtags
 * 
 */
class Post
{
    var $id_post;
    var $id_user;       // This could be replaced by an User Object. As you rather than.
    var $path_to_photo;
    var $photo;  // Encoded Image //TODO Esta variable puede ser innecesaria.
    var $description;

    var $hashtags; // List of words.

    var likes;      // This should be a list of people (list of id_user) who likes this pic. May be unused.
    var comments;   // This should be a list of its comments. May be unused.

    // Timestamp
    var $created_at;
    var $updated_at;
}


?>