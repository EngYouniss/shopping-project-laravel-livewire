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
        Schema::create('order_details', function (Blueprint $table) {
            $table->id();
$table->foreignId('order_id')
          ->nullable()
          ->constrained('orders')
          ->onDelete('set null');
$table->foreignId('product_id')
          ->nullable()
          ->constrained('products')
          ->onDelete('set null');            $table->integer('quantity')->default(1);
            $table->decimal('price', 10, 2); // Price at the time of order
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_items');
    }
};
