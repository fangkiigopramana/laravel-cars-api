<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->integer("type_id");
            $table->string("car_name");
            $table->bigInteger("price");
            $table->integer("combustion_power");
            $table->string("type_fuel");
            $table->string("transmition");
            $table->text("spesification");
            $table->text("address");
            $table->string("color");
            $table->integer("width");
            $table->integer("weight");
            $table->string("upholstery");
            $table->integer("length");
            $table->integer("height");
            $table->integer("max_speed");
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
        Schema::dropIfExists('cars');
    }
};
