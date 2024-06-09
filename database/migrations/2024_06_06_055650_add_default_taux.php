<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //
        DB::table('tauxes')->insert([
            
            [
                "libelle" => '1 fois par semaine',
                "pourcentage" => 20,
              
            ],
            [
                "libelle" => '1 fois par quinzaine',
                "pourcentage" => 20,
              
            ],
            [
                "libelle" => '1 fois par mois',
                "pourcentage" => 20,
              
            ],
            [
                "libelle" => 'Juste cette fois ci',
                "pourcentage" => 20,
              
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};