<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFollowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('followers', function (Blueprint $table) {
            $table->integer('user_id')->unsigned();
            $table->integer('user_id_follower')->unique()
                ->unsigned()
                ->comment('La cuenta que te sigue');

            // Foreign Key
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

            $table->foreign('user_id_follower')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

            // Database Vars            
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('followers');
    }
}
