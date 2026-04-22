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
            Schema::create('perfil', function (Blueprint $table) {
                $table->id('id');
                $table->string('nomeEmpresa',250);
                $table->string('email',250)->unique();
                $table->string('telefone', 20)->nullable();
                $table->string('endereco', 250)->nullable();
                $table->decimal('valorHora', 8, 2)->nullable();
                $table->timestamps();
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
