<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pets', function (Blueprint $table) {
            // Tabla debil
            $table->string('name')->nullable();
            $table->integer('age')->nullable()->comment('En meses');
            $table->enum('sex', ['male','female'])->nullable();
            $table->string('specie')->nullable()->comment('Si es Gato, Perro, Ave, etc');
            $table->string('description')->nullable();

            // Foreign Key
            $table->integer('user_id')->unsigned()->unique();
            $table->foreign('user_id')
                    ->references('id')->on('users')
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
        Schema::dropIfExists('pets');
    }
}
