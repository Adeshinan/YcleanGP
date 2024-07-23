<?php

use Carbon\Carbon;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //
        DB::table('users')->insert([
                       
            [
                "name" => 'Yclean',
                "numero" => '+1 000000000000',
                "address" => "Montral",
                "postal" => "Montral",
                "ville" => "quebec",
                "mode_connexion" => 'email',
                "valide" => 1,
                "type_connecter" => 'admin',
                "email_verified_at" => Carbon::now(),
                'email' => 'ycleaner@ya.ca',
                'password'=> Hash::make('12345678')
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