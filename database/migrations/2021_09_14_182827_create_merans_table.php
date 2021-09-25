<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMeransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('merans', function (Blueprint $table) {
            $table->id();
            $table->integer('statement')->nullable();
            $table->integer('partial_credit')->nullable();
            $table->integer('total_credit')->nullable();
            $table->integer('partial_debt')->nullable();
            $table->integer('total_debt')->nullable();
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
        Schema::dropIfExists('merans');
    }
}
