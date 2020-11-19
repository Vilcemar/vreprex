<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Adress extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adress', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_user_or_comp')->nullable();
            $table->enum('tipo',['user', 'comp']);
            $table->string('andress', 120);
            $table->string('number', 5)->nullable();
            $table->string('district', 60);
            $table->string('city', 40);
            $table->string('state', 40);
            $table->string('country', 40);
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
        Schema::dropIfExists('andress');
    }
}
