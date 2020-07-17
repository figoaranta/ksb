<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuppliersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suppliers', function (Blueprint $table) {
            $table->id();
            // $table->bigInteger('supplierId')->unsigned();
            // $table->foreign('supplierId')->references('id')->on('clients_suppliers');
            $table->string('supplierName');
            $table->foreign('supplierName')->references('name')->on('clients_suppliers');
            $table->string("order");
            // $table->bigInteger('wheelId')->unsigned();
            // $table->foreign('wheelId')->references('id')->on('wheels');
            // $table->integer('quantityBought');
            // $table->integer('price');
            $table->date('shippingDate')->nullable();
            $table->date('paymentDate')->nullable();
            $table->date('purchaseDate')->nullable();
            $table->boolean('paid')->default(false);
            $table->string('staffName')->index();
            $table->foreign('staffName')->references('name')->on('accounts');
            $table->string('supplierAddress')->nullable();
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
        Schema::dropIfExists('suppliers');
    }
}
