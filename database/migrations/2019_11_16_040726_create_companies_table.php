<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->string('bussines_name')->nullable()
                ->comment('Razon Social');

            $table->string('bussines_email')->nullable()
                ->comment('Mail de contacto');

            $table->point('google_maps_position')->nullable()
                ->comment('Latitude, Longitude');

            $table->string('description')->nullable()
                ->comment('Aqui puede ser la mision de la empresa o algo así');

            $table->integer('rating')->nullable()
                ->comment('Estrellas en google maps. Puede Ser Util');

            // Foreign Key
            $table->integer('user_id')->unsigned();;
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
        Schema::dropIfExists('companies');
    }
}
