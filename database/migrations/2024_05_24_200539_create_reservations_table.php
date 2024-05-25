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
            $table->string('address');
            $table->string('nbre_fois');
            $table->text('service');
            $table->integer('nbre_personne')->nullable();
            $table->string('chambre')->default(0);
            $table->string('cuisine')->default(0);
            $table->string('salle_bain')->default(0);
            $table->string('salle_eau')->default(0);
            $table->string('salon')->default(0);
            $table->string('buanderie')->default(0);
            $table->string('entre_couloir')->default(0);
            $table->string('escalier')->default(0);
            $table->string('heure_session')->nullable();
            $table->date('date_visite');
            $table->string('heure_travail');
            $table->string('pour_qui')->nullable();
            $table->string('type_paiement')->nullable();
            $table->text('autre_info')->nullable();
            $table->integer('valider')->default(0);
            $table->string('prixTotal');
            $table->string('prixMenager')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('reservations');
    }
};