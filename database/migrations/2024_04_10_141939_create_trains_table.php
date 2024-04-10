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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->text('company');
            $table->text('departurs');
            $table->text('arrivals');
            $table->date('date');
            $table->time('time_to_departurs');
            $table->time('time_to_arrive');
            $table->string('train_number');
            $table->tinyInteger('train_carriages');
            $table->boolean('time');
            $table->boolean('canceled')->default(false);
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
