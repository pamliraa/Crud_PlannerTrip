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
        Schema::create('orcamentos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->decimal('valorEstimado', 10, 2);
            $table->decimal('valorGasto', 10, 2);
            $table->string("descricao");
            $table->unsignedBigInteger('id_destino')->nullable();
            $table->foreign('id_destino')->references('id')->on('destinos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orcamentos');
    }
};
