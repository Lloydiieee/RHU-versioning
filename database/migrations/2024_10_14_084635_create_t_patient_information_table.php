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
        Schema::create('t_patient_information', function (Blueprint $table) {
            $table->id();
            $table->string(column: 'info_name'); 
            $table->string(column: 'info_address'); 
            $table->string(column: 'info_civil_status'); 
            $table->string(column: 'info_religion'); 
            $table->string(column: 'info_philhealth'); 
            $table->string(column: 'info_philhealth_num'); 
            $table->string(column: 'info_age'); 
            $table->string(column: 'info_bloodtype'); 
            $table->string(column: 'info_birthdate'); 
            $table->string(column: 'info_weight'); 
            $table->string(column: 'info_contact_num'); 
            $table->string(column: 'info_gavida'); 
            $table->string(column: 'info_term');
            $table->string(column: 'info_preterm');  
            $table->string(column: 'info_abortion'); 
            $table->string(column: 'info_live'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_patient_information');
    }
};
