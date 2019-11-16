<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            // Basic info
            $table->enum('type', ['pet', 'company']);
            $table->string('email')->unique();
            $table->string('username')->unique();            
            $table->string('password');                    
            $table->string('profile_photo')->nullable();            

            //Extra Info
            $table->string('paypal')->nullable();
            $table->string('phone')->nullable();

            // Database Vars
            $table->string('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
