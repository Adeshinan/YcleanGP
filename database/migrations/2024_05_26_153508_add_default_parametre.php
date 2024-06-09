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
        //

       
            DB::table('parametres')->insert([
               
                [
                    "nom" => 'Chambres',
                    "libelle" => 'chambre',
                    "prix" => 20,
                  
                ],
                [
                    "nom" => 'Cuisines',
                    "libelle" => 'cuisine',
                    "prix" => 20,
                  
                ],
                [
                    "nom" => 'Salle de bain complètes',
                    "libelle" => 'salle_bain',
                    "prix" => 20,
                  
                ],
                [
                    "nom" => 'Salle d\'eaus',
                    "libelle" => 'salle_eau',
                    "prix" => 20,
                    
                ],
                [
                    "nom" => 'Sallon salle à manger et autre',
                    "libelle" => 'salon',
                    "prix" => 20,
                    
                ],
                [
                    "nom" => 'Buanderies',
                    "libelle" => 'buanderie',
                    "prix" => 20,
                    
                ],
                [
                    "nom" => 'Entrée et Couloires',
                    "libelle" => 'entre_couloir',
                    "prix" => 20,
                    
                ],
                [
                    "nom" => 'Escaliers',
                    "libelle" => 'escalier',
                    "prix" => 20,
                    
                ],
                
               
            ]);
       
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};