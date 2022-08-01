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
        Schema::create('repuestas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pregunta_id')->nullable();
            $table->foreign('pregunta_id')->references('id')->on('preguntas');
            $table->string('respuesta', 300);
            $table->boolean('correcta')->default(1);
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
        Schema::dropIfExists('repuestas');
    }
};
