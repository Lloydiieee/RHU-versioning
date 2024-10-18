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
        Schema::create('t_health', function (Blueprint $table) {
            $table->id();           
            $table->string(column: 'h_tuberculosis'); 
            $table->string(column: 'h_hypertension'); 
            $table->string(column: 'h_diabetes'); 
            $table->string(column: 'h_bronchial'); 
            $table->string(column: 'h_goiter'); 
            $table->string(column: 'h_hepatitis'); 
            $table->string(column: 'h_smoking'); 
            $table->string(column: 'h_alcohol'); 
            $table->string(column: 'h_drugs'); 
            $table->string(column: 'h_abuse'); 
            $table->string(column: 'h_multiple_partners'); 
            $table->string(column: 'h_others'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_health');
    }
};
