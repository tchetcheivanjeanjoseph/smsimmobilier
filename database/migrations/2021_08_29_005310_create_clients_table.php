<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('nom')->nullable(); // pour les champs de type string
            $table->string('prenom')->nullable(); // pour les champs de type string
            $table->string('email')->nullable(); // pour les champs de type string
            $table->string('date')->nullable(); // pour les champs de type string
            $table->string('contact')->nullable(); // pour les champs de type string
            $table->string('nationalite')->nullable(); // pour les champs de type string
            $table->string('adresse')->nullable(); // pour les champs de type string
            $table->string('villeResidence')->nullable(); // pour les champs de type string
            $table->string('paysResidence')->nullable();  
            $table->string('numerPpiece')->nullable(); // pour les champs de type integer grande valeur
            $table->string('typePiece')->nullable(); // pour les champs de type string
            $table->string('imagesPiece')->nullable(); // pour les champs de type string
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
        Schema::dropIfExists('clients');
    }
} 
