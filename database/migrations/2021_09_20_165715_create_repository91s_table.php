<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRepository91sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('repository91s', function (Blueprint $table) {
            $table->id();
                        $table->foreignId('user_id');

            $table->foreign('user_id')->references('id')->on("users")->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('petrol91_id')->nullable()->constrained('petrol91s', 'id')->nullOnDelete();
            $table->float('sales')->default(0);
            $table->float('received')->default(0);
            $table->float('balance')->default(0);
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
        Schema::dropIfExists('repository91s');
    }
}
