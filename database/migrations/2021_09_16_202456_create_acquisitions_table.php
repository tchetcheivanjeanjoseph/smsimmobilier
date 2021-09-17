<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcquisitionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Schema::dropIfExists('acquisitions');
        Schema::create('acquisitions', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('bien_id');
            $table->unsignedBigInteger('client_id');
            
            $table->string('status')->nullable(); // 1 2 3 4 5 6 
            $table->string('dateSign')->nullable(); 
            $table->string('dateAcquisition')->nullable(); 
            $table->string('conventionAchat')->nullable(); 

            $table->string('AttestationVillageoise')->nullable(); 
            $table->string('OrdreRecetteDroit')->nullable(); 
            $table->string('domaniaux')->nullable(); 
            $table->string('ExtraitTopographique')->nullable(); 
            $table->string('ProceVerbal')->nullable(); 
            $table->string('ACD')->nullable(); 


           // $table->foreign('bien_id')->references('id')->on('biens')->onDelete('cascade');
            //$table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade');

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
        Schema::dropIfExists('acquisitions');
    }
}
