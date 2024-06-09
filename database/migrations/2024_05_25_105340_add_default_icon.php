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
       
            DB::table('icons')->insert([
                [
                    "id" => 1,
                    "nom" => 'lemon',
                    "icon" => 'las la-trophy',
                ],
                [
                    "id" => 2,
                    "nom" => 'cable-car',
                    "icon" => 'bx bx-cable-car',
                ],
                [
                    "id" => 3,
                    "nom" => 'cricket-ball',
                    "icon" => 'bx bx-cricket-ball',
                ],
                [
                    "id" => 4,
                    "nom" => 'male-female',
                    "icon" => 'bx bx-male-female',
                ],
                [
                    "id" => 5,
                    "nom" => 'baguette',
                    "icon" => 'bx bx-baguette',
                ],
                [
                    "id" => 6,
                    "nom" => 'fork',
                    "icon" => 'bx bx-fork',
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