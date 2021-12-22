<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("book_id");
            $table->foreign('book_id')
            ->references('id')->on('books')
            ->onDelete('cascade');
            $table->unsignedBigInteger('orders_id');
            $table->foreign('orders_id')
            ->references('id')->on('orders')
            ->onDelete('cascade');
            $table->integer('price_each');
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
        Schema::dropIfExists('order_details');
    }
}
