<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Company extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companys', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_user')->nullable();
            $table->string('razao_social', 60)->nullable();
            $table->string('company_name', 60)->nullable();
            $table->string('fantasy', 60)->nullable();
            $table->string('cnpj', 18)->nullable();
            $table->string('cpf', 20)->nullable();
            $table->string('state_registration', 18)->nullable();
            $table->string('phone', 15)->nullable();
            $table->string('cell', 15)->nullable();
            $table->string('email', 50)->nullable();
            $table->string('social_network', 50)->nullable();
            $table->string('comments', 50)->nullable();
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
        Schema::dropIfExists('companys');
    }
}
