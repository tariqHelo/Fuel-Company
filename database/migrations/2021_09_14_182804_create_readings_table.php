<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReadingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('readings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreign('user_id')->references('id')->on("users")->cascadeOnDelete()->cascadeOnUpdate();
            // $table->json('meter')->nullable();
            // $table->float('total', 2,3)->default(0);
            // $table->bigInteger('qty')->default(0);
            // $table->integer('caliber')->default(0);
            // $table->bigInteger('clear')->default(0);
            // $table->float('price')->default(0);
            // $table->bigInteger('value')->unsigned()->default(0);
            // $table->integer('size')->default(0);
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
        Schema::dropIfExists('readings');
    }
}
