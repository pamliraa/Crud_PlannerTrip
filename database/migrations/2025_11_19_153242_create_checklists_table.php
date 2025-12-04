<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
        {
            Schema::create('checklists', function (Blueprint $table) {
                $table->id();
                $table->string('titulo');
                $table->text('descricao');
                $table->string('status');
                $table->foreignId('id_destino')->constrained('destinos')
                ->onDelete('cascade'); 
                $table->timestamps();
            });
        }

    public function down(): void
        {
            Schema::dropIfExists('checklists');
        }
    };
