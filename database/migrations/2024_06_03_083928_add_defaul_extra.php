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

        DB::table('extras')->insert([
            [
                "libelle" => 'Nettoyage en profondeur',
                "prix" => 20,
                "icon" => 'azerty',
              
            ],
            [
                "libelle" => 'Les murs',
                "prix" => 20,
                "icon" => 'azerty',

              
            ],
            [
                "libelle" => 'Armoires Intérieurs',
                "prix" => 20,
                "icon" => 'azerty',

              
            ],
            [
                "libelle" => 'Emménager Deménager',
                "prix" => 20,
                "icon" => 'azerty',

              
            ],
            [
                "libelle" => 'Animal de compagnie',
                "prix" => 20,
                "icon" => 'azerty',

              
            ],
            [
                "libelle" => 'Interieur de four',
                "prix" => 20,
                "icon" => 'azerty',
              
            ],
            [
                "libelle" => 'Interieur Frigo',
                "prix" => 20,
                "icon" => 'azerty',
              
            ],
            [
                "libelle" => 'Fenètre Interieurs',
                "prix" => 20,
                "icon" => 'azerty',
              
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