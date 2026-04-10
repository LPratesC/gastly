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
        Schema::create('ordemservicos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cliente_id')
                ->constrained('clientes', 'id')
                ->restrict('cascade');
            $table->foreignId('veiculo_id')
                ->constrained('veiculos', 'id')
                ->restrict('cascade');
            $table->foreignId('orcamento_id')
                ->constrained('orcamentos', 'id')
                ->restrict('cascade');
            $table->date('dataCriacao');
            $table->string('observacao',250);
            $table->enum('status', ['pendente', 'concluido'])->default('pendente');
            $table->integer('kilometragemAtual');
            $table->integer('numeroRecibo')->unique();
            $table->double('valorTotal', 8, 2);
            $table->double('valorDesconto', 8, 2);
            $table->timestamps();

            $table->index('cliente_id');
            $table->index('veiculo_id');
            $table->index('status'); 
            $table->index('numeroRecibo');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ordemservicos');
    }
};
