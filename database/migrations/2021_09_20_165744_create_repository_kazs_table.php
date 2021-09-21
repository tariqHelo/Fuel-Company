<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRepositoryKazsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('repository_kazs', function (Blueprint $table) {
            $table->id();
             $table->foreignId('kaz_id')->nullable()->constrained('kazs', 'id')->nullOnDelete();
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
        Schema::dropIfExists('repository_kazs');
    }
}
