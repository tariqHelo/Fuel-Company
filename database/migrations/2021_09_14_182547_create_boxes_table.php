<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBoxesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boxes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');

            $table->foreign('user_id')->references('id')->on("users")->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('petrol91_id')->nullable()->constrained('petrol91s', 'id')->nullOnDelete();
            $table->foreignId('kaz_id')->nullable()->constrained('kazs', 'id')->nullOnDelete();
            $table->foreignId('diesel_id')->nullable()->constrained('diesels', 'id')->nullOnDelete();
            $table->foreignId('petrol95_id')->nullable()->constrained('petrol95s', 'id')->nullOnDelete();
            $table->foreignId('hasyna_id')->nullable()->constrained('hesnyas', 'id')->nullOnDelete();
            $table->float('total')->default(0);
            $table->foreignId('delay_id')->nullable()->constrained('delayeds', 'id')->nullOnDelete();
            $table->float('clear')->default(0);
            $table->foreignId('water_id')->nullable()->constrained('waters', 'id')->nullOnDelete();
            $table->foreignId('actitvity_id')->nullable()->constrained('transaction_actitvities','id')->nullOnDelete();
            $table->float('total_actitvity')->default(0);
            $table->float('cash')->default(0);
            $table->foreignId('bank_id')->nullable()->constrained('transaction_banks', 'id')->nullOnDelete();
            $table->float('atm')->default(0);
            $table->float('Total_cash_and_cash')->default(0);
            $table->float('balance')->default(0);
            // $table->foreignId('bank_id')->nullable()->constrained('transaction_banks','id')->nullOnDelete();


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
        Schema::dropIfExists('boxes');
    }
}
