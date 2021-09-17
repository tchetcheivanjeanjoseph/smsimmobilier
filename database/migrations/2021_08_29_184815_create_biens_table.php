<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biens', function (Blueprint $table) {
            $table->id();
            $table->string('reference')->nullable();
            $table->string('lot')->nullable(); 
            $table->string('ilot')->nullable(); 
            $table->string('titreFoncier')->nullable(); 
            $table->string('typeBien')->nullable(); 
            $table->string('pays')->nullable();
            $table->string('commune')->nullable();  
            $table->string('ville')->nullable(); 
            $table->string('quartier')->nullable(); 
            $table->string('superficie')->nullable();  
            $table->string('nombrePieces')->nullable(); 
            $table->string('nombreChambres')->nullable(); 
            $table->string('nombreSalleBain')->nullable(); 
            $table->string('nombreWc')->nullable(); 
            $table->string('garage')->nullable(); 
            $table->string('piscine')->nullable(); 
            $table->string('nombreEtages')->nullable(); 
            $table->string('longitude')->nullable(); 
            $table->string('lattitude')->nullable(); 
            $table->string('mandat')->nullable(); 
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
        Schema::dropIfExists('biens');
    }
}
