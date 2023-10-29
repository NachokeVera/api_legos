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
        Schema::create('legos', function (Blueprint $table) {
            $table->integer('numero')->unsigned()->primary();
            $table->string('nombre');
            $table->string('tema');
            $table->integer('precio');
            $table->integer('cantidad');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('legos');
    }
};
