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
        DB::table('taxes')->insert([
            
            [
                "libelle" => 'tps',
                "pourcentage" => 20,
              
            ],
            [
                "libelle" => 'tvq',
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