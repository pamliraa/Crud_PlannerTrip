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
        Schema::create('atividades', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("titulo");
            $table->string("descricao");
            $table->date("data");
            $table->string("local");
            $table->string("status"); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('atividades');
    }
};
