<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */

     public function up()
     {
         Schema::create('groupes', function (Blueprint $table) {
             $table->id();
             $table->string('nomgrp');
             $table->foreignId('semestre_id')->constrained('semestres')->cascadeOnDelete();
             $table->timestamps();
         });
     }
     

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('groupes');
    }
};