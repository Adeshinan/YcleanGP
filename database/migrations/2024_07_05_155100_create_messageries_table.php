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
        Schema::create('messageries', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('reception_id');
            $table->foreign('reception_id')->references('id')->on('users')->onDelete('cascade');
            
            $table->unsignedBigInteger('sender_id');
            $table->foreign('sender_id')->references('id')->on('users')->onDelete('cascade');
            
            $table->text('message');
            $table->integer('vue')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('messageries');
    }
};