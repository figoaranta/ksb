<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatternTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patternTypes', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('brandTypeId')->unsigned();
            $table->foreign('brandTypeId')->references('id')->on('brandTypes');
            $table->string('patternType')->unique();
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
        Schema::dropIfExists('patternTypes');
    }
}
