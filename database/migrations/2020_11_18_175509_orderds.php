<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class OrderdsMaster extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orderdsmaster', function (Blueprint $table) {
            $table->id();
            $table->date('date_order')->nullable();
            $table->bigInteger('id_user')->nullable();
            $table->bigInteger('id_salesman')->nullable();

            $table->string('razao_social', 60)->nullable();
            $table->string('company_name', 60)->nullable();
            $table->string('fantasy', 60)->nullable();
            $table->string('cnpj', 18)->nullable();
            $table->string('cpf', 15)->nullable();
            $table->string('state_registration', 18)->nullable();
            $table->string('phone', 15)->nullable();
            $table->string('cell', 15)->nullable();
            $table->string('email', 50)->nullable();
            $table->string('social_network', 50)->nullable();
            $table->string('comments', 30)->nullable();

            $table->string('andress', 120);
            $table->string('number', 5)->nullable();
            $table->string('district', 60);
            $table->string('city', 40);
            $table->string('state', 40);
            $table->string('country', 40);

            $table->decimal('discount', 10,2)->nullable();
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
        Schema::dropIfExists('orderdsmaster');
    }
}
