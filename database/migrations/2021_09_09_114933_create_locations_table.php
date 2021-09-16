<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->id();
            $table->string('nomLocataire')->nullable(); 
            $table->string('bienLoue')->nullable(); 
            $table->string('dateSign')->nullable(); 
            $table->string('dateEntre')->nullable(); 
            $table->string('dateExpiration')->nullable(); 
            $table->string('mandatLocation')->nullable(); 
            $table->boolean('status')->default(false);
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
        Schema::dropIfExists('locations');
    }
}
