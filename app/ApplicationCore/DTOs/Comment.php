<?php 
namespace App\ApplicationCore\DTOs;
class Comment
{
    var id_comment;
    var $user; // This could be a Id_user or an User Object xd
    var $post; // This could be a Id_user or an Post Object xd

    var $text_comment;

    // Timestamp
    var $created_at;
    var $updated_at;
}


?>