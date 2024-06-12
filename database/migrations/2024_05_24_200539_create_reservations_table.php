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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->string('address')->nullable();
            $table->string('code')->nullable();
            $table->string('ville')->nullable();
            $table->string('nbre_fois');
            $table->json('extra');
            $table->integer('nbre_personne')->nullable();
            $table->integer('chambre')->nullable();
            $table->integer('cuisine')->nullable();
            $table->integer('salle_bain')->nullable();
            $table->integer('salle_eau')->nullable();
            $table->integer('salon')->nullable();
            $table->integer('buanderie')->nullable();
            $table->integer('entre_couloir')->nullable();
            $table->integer('escalier')->nullable();
            $table->string('heure_session')->nullable();
            $table->datetime('date_visite');
            //$table->string('heure_travail');
            $table->boolean('pour_qui')->default(0);
            $table->integer('type_paiement');
            //$table->text('autre_info')->nullable();
            $table->integer('valider')->default(0);
            $table->decimal('prixTotal', 8, 2)->nullable();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('service_id');
            $table->foreign('service_id')->references('id')->on('services')->onDelete('cascade');
            $table->timestamps();
            $table->softDeletes();
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservations');
    }
};