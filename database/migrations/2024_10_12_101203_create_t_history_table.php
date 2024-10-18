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
        Schema::create('t_history', function (Blueprint $table) {
            $table->id();
            $table->string(column: 'obs_year_of_delivery'); 
            $table->string(column: 'obs_type_of_delivery'); 
            $table->string(column: 'obs_place_of_delivery'); 
            $table->string(column: 'obs_birth_attendant'); 
            $table->string(column: 'obs_complications'); 
            $table->string(column: 'obs_outcome_of_pregnancy'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_history');
    }
};
