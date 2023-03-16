<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('professor_series', function (Blueprint $table) {
            $table->id();
            $table->foreignId('professor_id')->constrained('professors');
            $table->foreignId('serie_id')->constrained('series');
            $table->enum('tipo', ['R1', 'R2', 'PAEE']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('professor_series');
    }
};
