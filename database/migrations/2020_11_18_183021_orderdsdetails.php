<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Orderdsdetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orderdsdetails', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_user')->nullable();
            $table->bigInteger('id_orderdsmaster')->nullable();
            $table->bigInteger('id_product')->nullable();
            $table->string('abbreviate', 15)->nullable();
            $table->string('name_product', 35)->nullable();
            $table->decimal('etq', 10,2);
            $table->decimal('cost', 10,2)->nullable();
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
        Schema::dropIfExists('orderdsdetails');
    }
}
