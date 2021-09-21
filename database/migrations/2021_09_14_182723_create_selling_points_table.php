<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSellingPointsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('selling_points', function (Blueprint $table) {
            $table->id();
           // $table->string('name');
            $table->float('price1')->default(0);
            $table->float('price2')->default(0);
            $table->float('total')->default(0);
           // $table->enum('status', ['active', 'draft']);
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
        Schema::dropIfExists('selling_points');
    }
}
