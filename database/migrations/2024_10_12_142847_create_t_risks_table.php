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
        Schema::create('t_risks', function (Blueprint $table) {
            $table->id();
            $table->string('r_age'); 
            $table->string('r_multiparity'); 
            $table->string('r_previous_cs'); 
            $table->string('r_consecutive_miscarriages'); 
            $table->string('r_stillbirth'); 
            $table->string('r_malnourished'); 
            $table->string('r_co_morbidity'); 
            $table->string('r_postpartum_hemorrhage'); 
            $table->string('r_menarchy'); 
            $table->string('r_menstrual_flow_duration'); 
            $table->string('r_pads_per_day'); 
            $table->timestamps();


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_risks');
    }
};
