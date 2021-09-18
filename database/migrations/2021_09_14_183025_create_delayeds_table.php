<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDelayedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('delayeds', function (Blueprint $table) {
            $table->id();
            $table->string('police');
            $table->string('ferrule');
            $table->string('tutor');
            $table->string('petro_ab');
            $table->string('national');
            $table->string('South');
            $table->string('Enterprise');
            $table->string('client');
            $table->integer('total')->default(0);
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
        Schema::dropIfExists('delayeds');
    }
}
