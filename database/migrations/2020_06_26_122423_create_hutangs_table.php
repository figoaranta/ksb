<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHutangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hutangs', function (Blueprint $table) {
            $table->bigInteger('id')->unsigned()->primary();
            $table->foreign('id')->references('id')->on('clients_suppliers');
            // $table->id();
            // $table->string('supplierName')->index();
            // $table->foreign('supplierName')->references('name')->on('clients_suppliers');
            // $table->string('supplierAddress')->nullable();
            $table->integer('debt');
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
        Schema::dropIfExists('hutangs');
    }
}
