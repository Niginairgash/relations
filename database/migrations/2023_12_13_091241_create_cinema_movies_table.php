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
        if(!Schema::hasTable('cinema_movies'))
        {
            Schema::create('cinema_movies', function (Blueprint $table) {
                $table->id();
                $table->timestamps();
                $table->foreignId('cinema_id')->constrained()->onDelete('cascade');
                $table->foreignId('movie_id')->constrained()->onDelete('cascade');
            });
        }
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cinema_movies');
    }
};
