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
        Schema::create('pessoa_sepultadas', function (Blueprint $table) {
            $table->id();
            $table->string("nome");
            $table->date("data_nascimento");
            $table->date("data_falecimento");
            $table->string("local_sepulcro");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pessoa_sepultadas');
    }
};
