<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('customer_id');
            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
            $table->date('order_date')->nullable();
            $table->enum('order_status',['pending','complete']);
            $table->integer('total_products')->nullable();
            $table->integer('sub_total')->nullable();
            $table->integer('vat')->nullable();
            $table->string('invoice_no')->nullable();
            $table->integer('total')->nullable();
            $table->string('payment_status')->nullable(); 
            $table->integer('pay')->nullable();
            $table->integer('due')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
