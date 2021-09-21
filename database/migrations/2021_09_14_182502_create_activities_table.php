<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activities', function (Blueprint $table) {
            $table->id();
            $table->integer('pincher');
            $table->integer('grocery');
            $table->integer('washing');
            $table->integer('flat');
            $table->integer('room');
            $table->float('total');

            // $table->string('name');
            // $table->enum('status', ['active', 'draft']);
            $table->timestamps();
        });
    }
// Pincher
// grocery shop
// Washing machine
// Flat
// the room
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('activities');
    }
}
