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
        Schema::create('houses', function (Blueprint $table) {
            $table->id();
            $table->string('Image', 255);
            $table->string('Reference', 50);
            $table->string('Address', 100);
            $table->string('postal_code', 10);
            $table->string('city', 50);
            $table->string('state', 50);
            $table->float('square_meters', 2);
            $table->tinyInteger('rooms');
            $table->tinyInteger('bathrooms');
            $table->string('type', 50);
            $table->text('description')->nullable();
            $table->float('price', 2);
            $table->boolean('is_available')->default(true);
            $table->string('energy_rating', 4);
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
        Schema::dropIfExists('houses');
    }
};
