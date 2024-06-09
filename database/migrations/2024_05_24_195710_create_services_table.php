<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('libelle');
            $table->boolean('est_agent')->default(0);
            $table->boolean('personalise')->default(0);
            $table->integer('agent')->nullable();
            $table->integer('heure')->nullable();
            $table->integer('pourcentage')->nullable();
            $table->decimal('prixhors', 8, 2)->nullable();
            $table->json('extra')->nullable();
      
            
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
        Schema::dropIfExists('services');
    }
};