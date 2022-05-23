<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->string('order_no');
            $table->string('customer_name');
            $table->string('customer_email');
            $table->string('customer_address');
            $table->string('customer_country');
            $table->unsignedBigInteger('product');
            $table->date('ordered_date');
            $table->unsignedBigInteger('recorded_by');
            $table->enum('status', ['Completed', 'Processing', 'Cancelled', 'Refunded', 'On Hold', 'Payment Pending']);
            $table->string('amount');
            $table->longText('remarks')->nullable();
            $table->foreign('product')->references('id')->on('products')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('recorded_by')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('orders');
    }
};
