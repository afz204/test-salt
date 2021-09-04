<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('userId')->unsigned()->index();
            $table->string('orderNo', 10)->unique();
            $table->enum('vat_type', ['percentage', 'fixed'])->default('percentage');
            $table->integer('vat')->default(0);
            $table->double('vat_value')->default(0);
            $table->double('total');
            $table->enum('states', ['unpaid', 'success', 'canceled', 'failed'])->default('unpaid');
            $table->dateTime('paidAt')->nullable();
            $table->timestamps();

            $table->foreign('userId')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
