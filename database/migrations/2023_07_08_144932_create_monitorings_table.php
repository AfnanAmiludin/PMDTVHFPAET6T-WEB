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
        Schema::create('monitorings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tx_id');
            $table->foreign('tx_id')->references('id')->on('txes')->cascadeOnDelete();
            $table->string('frequensi');
            $table->string('mode');
            $table->bigInteger('fwd_power');
            $table->bigInteger('vswr');
            $table->string('line_in');
            $table->string('mod_depth');
            $table->string('offset');
            $table->string('step');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('monitorings');
    }
};
