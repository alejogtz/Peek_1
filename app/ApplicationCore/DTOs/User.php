<?php 
namespace App\ApplicationCore\DTOs;

/**
 * 'User' refers to Pets. Which can be Dogs, Cats, Tigers, Birds... etc.
 * 
 */
class User
{
    // About account.
    var $id;
    var $mail;
    var $descripcion;
    var $paypal_account;
    var $avatar;
    var $passwd;

    /** 
     * // TODO Creo que aquí sería ideal separar la informacion de la cuenta de la informacion
     * de las mascotas
    */ 
    // About Pets.
    var $name_pet;
    var $age;
    var $race;
    var $has_pedigree;

    // Timestamp
    var $created_at;
    var $updated_at;


}


?>