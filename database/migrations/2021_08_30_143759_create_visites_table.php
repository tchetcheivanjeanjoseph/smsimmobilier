<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visites', function (Blueprint $table) {
            $table->id();
            $table->string('nom')->nullable(); 
            $table->string('prenom')->nullable(); 
            $table->string('email')->nullable(); 
            $table->string('genre')->nullable(); 
            $table->string('contact')->nullable(); 
            $table->string('dateVisite')->nullable(); 
            $table->string('heureVisite')->nullable(); 
            $table->string('lieuRdv')->nullable(); 
            $table->string('lieuVisite')->nullable(); 
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
        Schema::dropIfExists('visites');
    }
}
