<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('t_tetanus_toxoids', function (Blueprint $table) {
            $table->id();
            $table->string('tt_tt1');
            $table->string('tt_tt2');
            $table->string('tt_tt3');
            $table->string('tt_tt4');
            $table->string('tt_tt5');
            $table->string('tt_fim'); 
            $table->timestamps();
        });
    }

   
    public function down(): void
    {
        Schema::dropIfExists('t_tetanus_toxoids');
    }
};
