<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComentarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Comentario', function (Blueprint $table) {
            $table->increments('id');
            $table->string('content');
            $table->integer('id_user')->unsigned();
            $table->integer('id_post')->unsigned();
            $table->foreign('id_user')
            ->references('id')
            ->on('users')
            ->onDelete('cascade');
            
            $table->foreign('id_post')
            ->references('id')
            ->on('Post')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Comentario');
    }
}
