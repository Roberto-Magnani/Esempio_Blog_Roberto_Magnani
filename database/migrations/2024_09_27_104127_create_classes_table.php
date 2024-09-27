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
        Schema::create('classes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('class');
            $table->string('pf_dice');
            $table->string('pf_first');
            $table->string('pf_higher');
            $table->string('armors');
            $table->string('weapons');
            $table->string('tools');
            $table->string('saving_throws');
            $table->string('abilities');
            $table->string('equipments');
            $table->string('others')->nullable;
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
        Schema::dropIfExists('classes');
    }
};
