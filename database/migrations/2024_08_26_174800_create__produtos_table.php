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
        Schema::create('_produtos', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 100); //nome com 100 caracteres
            $table->text('descricao')->nullable(); //descrição podendo ser nulo(nullable)
            $table->integer('peso')->nullable(); //peso podendo ser nulo
            $table->float('preco_venda', 8, 2)->default(0.01); //preço com inserção de resgitro obrigatória (default)
            $table->integer('estoque_minimo')->default(1); //estoque mínimo com inserção de registro obrigatória
            $table->integer('estoque_maximo')->default(1); //estoque máximo com inserção de resgistro obrigatória
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_produtos');
    }
};
