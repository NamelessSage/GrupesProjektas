<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePokalbisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pokalbis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('administratorius_id');
            $table->unsignedBigInteger('klientas_id');
            $table->string('tema');
            $table->foreign('administratorius_id')->references('id')->on('admins');
            $table->foreign('klientas_id')->references('id')->on('klientas');
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
        Schema::dropIfExists('pokalbis');
    }
}
