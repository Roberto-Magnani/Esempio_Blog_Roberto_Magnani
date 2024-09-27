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
        Schema::create('races', function (Blueprint $table) {
            $table->id();
            $table->string('img');
            $table->string('name');
            $table->string('plot');
            $table->string('alignment');
            $table->string('age');
            $table->string('size');
            $table->string('speed');
            $table->string('language');
            $table->string('subrace')->nullable();
            //! colonna di uder_id di tipo intero positivo e senza segno
            $table->unsignedBigInteger('user_id')->nullable();
            //! chiave col vincolo di integritá referenziale -> foreign che prende lo stesso nome della colonna
            //! fará riferimento alla colonna id sulla tabella users
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('races');
    }
};
