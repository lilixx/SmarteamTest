<?php

use App\Models\Pregunta;
use App\Models\Test;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pregunta_test', function (Blueprint $table) {
            $table->foreignIdFor(Pregunta::class)->constrained()->onDelete('cascade');
            $table->foreignIdFor(Test::class)->constrained()->onDelete('cascade');
            $table->primary(['pregunta_id', 'test_id']);

            $table->index('pregunta_id');
            $table->index('test_id');
            $table->boolean('correcta')->default(1);
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pregunta_test');
    }
};
