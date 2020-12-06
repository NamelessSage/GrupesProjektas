<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZinutesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zinutes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pokalbio_id');
            $table->foreign('pokalbio_id')->references('id')->on('pokalbis');
            $table->string('tekstas');
            $table->string('siuntejas');
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
        Schema::dropIfExists('zinutes');
    }
}
