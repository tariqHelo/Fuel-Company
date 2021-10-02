<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePetrol95sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('petrol95s', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreign('user_id')->references('id')->on("users")->cascadeOnDelete()->cascadeOnUpdate();
            $table->json('meter')->nullable();
            $table->integer('total')->default(12136877);
            $table->float('qty' , 5,4)->default(0);
            $table->integer('caliber')->default(0);
            $table->float('clear' , 5,4)->default(0);
            // $table->float('price')->default(0);
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
        Schema::dropIfExists('petrol95s');
    }
}
