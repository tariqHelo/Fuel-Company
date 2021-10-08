<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMonthlyPricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('monthly_prices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreign('user_id')->references('id')->on("users")->cascadeOnDelete()->cascadeOnUpdate();
            $table->float('price1_91')->default(0);
            $table->float('price2_91')->default(0);

            $table->float('price1_diesel')->default(0);
            $table->float('price2_diesel')->default(0);

            $table->float('price1_95')->default(0);
            $table->float('price2_95')->default(0);

            $table->float('price1_kaz')->default(0);
            $table->float('price2_kaz')->default(0);

            $table->float('price_water')->default(0);

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
        Schema::dropIfExists('monthly_prices');
    }
}
