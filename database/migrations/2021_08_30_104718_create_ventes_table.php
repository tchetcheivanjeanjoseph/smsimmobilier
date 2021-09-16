<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventes', function (Blueprint $table) {
            $table->id();
            $table->string('nomAcquereur')->nullable(); 
            $table->string('prenomAcquereur')->nullable(); 
            $table->string('contact')->nullable(); 
            $table->string('email')->nullable(); 
            $table->string('dateSign')->nullable(); 
            $table->string('valeur')->nullable(); 
            $table->string('bien')->nullable(); 
            $table->string('mandatVente')->nullable(); 
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
        Schema::dropIfExists('ventes');
    }
}
