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
        Schema::create('orcamento', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('email');
            $table->string('celular');
            $table->string('instagram');
            $table->string('estado');
            $table->string('cidade');
            $table->string('tipo_desenho');
            $table->string('local');
            $table->decimal('largura');
            $table->decimal('altura');
            $table->string('cicatriz');
            $table->string('remocao');
            $table->text('cores');
            $table->decimal('valor');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orcamento');
    }
};
