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
        Schema::create('vinculoclienteveiculo', function (Blueprint $table) {
            $table->foreignId('cliente_id')
                ->constrained('clientes', 'id')
                ->restrict('cascade');
            $table->foreignId('veiculo_id')
                ->constrained('veiculos', 'id')
                ->restrict('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vinculoclienteveiculo');
    }
};
