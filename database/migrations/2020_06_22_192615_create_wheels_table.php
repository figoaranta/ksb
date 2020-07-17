IN<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWheelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wheels', function (Blueprint $table) {
            $table->id();
            $table->string("uniqueCode")->unique();
            $table->string('brandType')->index;
            $table->foreign('brandType')->references('brandType')->on('brandTypes');
            $table->string('wheelSizeType');
            $table->foreign('wheelSizeType')->references('wheelSizeType')->on('wheelSizeTypes');
            $table->integer('ringSizeType');
            $table->foreign('ringSizeType')->references('ringSizeType')->on('ringSizeTypes');
            $table->string('patternType');
            $table->foreign('patternType')->references('patternType')->on('patternTypes');
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
        Schema::dropIfExists('wheels');
    }
}
