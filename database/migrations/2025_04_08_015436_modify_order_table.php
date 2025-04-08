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
        Schema::table('orders', function (Blueprint $table) {
            // Change column types
            $table->text('product_id')->change();
            $table->text('quantity')->change();
            $table->float('total_price')->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->integer('product_id')->change();
            $table->integer('quantity')->change();
            $table->integer('total_price')->change();
        });
    }
};
