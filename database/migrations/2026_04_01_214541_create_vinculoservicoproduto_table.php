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
        Schema::create('vinculoservicoproduto', function (Blueprint $table) {
            $table->foreignId('servico_id')
                ->constrained('servicos', 'id')
                ->restrict('cascade');
            $table->foreignId('produtos_id')
                ->constrained('produtos', 'id')
                ->restrict('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vinculoservicoproduto');
    }
};
