<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('t_hpv_vaccination', function (Blueprint $table) {
            $table->id();
            $table->date('hpv_dose_1');
            $table->date('hpv_dose_2');
            $table->date('hpv_dose_3');
            $table->date('hpv_deworming_date');
            $table->date('hpv_lmp');
            $table->date('hpv_edc');
            $table->string('hpv_birthplan');
            $table->timestamps();
        });
    }
    
    public function down(): void
    {
        Schema::dropIfExists('t_hpv_vaccination');
    }
};
