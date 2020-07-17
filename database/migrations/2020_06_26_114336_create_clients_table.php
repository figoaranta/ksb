<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            // $table->bigInteger('clientId')->unsigned();
            // $table->foreign('clientId')->references('id')->on('clients_suppliers');
            $table->string('clientName');
            $table->foreign('clientName')->references('name')->on('clients_suppliers');
            // $table->bigInteger('wheelId')->unsigned();
            // $table->foreign('wheelId')->references('id')->on('wheels');
            $table->string("order");
            // $table->integer('quantityBought');
            // $table->integer('price');
            $table->date('shippingDate')->nullable();
            $table->date('paymentDate')->nullable();
            $table->date('purchaseDate')->nullable();
            $table->boolean('paid')->default(false);
            $table->string('staffName')->index();
            $table->foreign('staffName')->references('name')->on('accounts');
            $table->string('clientAddress')->nullable();
            $table->string('description');
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
        Schema::dropIfExists('clients');
    }
}
