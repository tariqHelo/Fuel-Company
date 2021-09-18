<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePetrol91sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('petrol91s', function (Blueprint $table) {
            $table->id();
            $table->json('meter')->nullable();
            $table->integer('total')->default(0);
            $table->integer('qty')->default(0);
            $table->integer('caliber')->default(0);
            $table->integer('clear')->default(0);
            $table->integer('price')->default(0);
            $table->integer('value')->default(0);
            $table->integer('size')->default(0);
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
        Schema::dropIfExists('petrol91s');
    }
}
