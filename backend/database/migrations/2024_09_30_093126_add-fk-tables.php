<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {

        Schema::table('invoices', function (Blueprint $table) {
            $table->foreign('cus_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('epl_id')->references('id')->on('users')->onDelete('cascade');
        });

        Schema::table('invoice_details', function (Blueprint $table) {
            $table->foreignId('invoice_id')->constrained()->onDelete('cascade');
            $table->foreignId('product_instance_id')->constrained('product_instances')->onDelete('cascade');
        });

        Schema::table('products', function (Blueprint $table) {
            $table->foreignId('type_id')->constrained('types')->onDelete('cascade');
        });

        Schema::table('product_instances', function (Blueprint $table) {
            $table->foreignId('product_id')->constrained('products')->onDelete('cascade');
        });

        Schema::table('product_toppings', function (Blueprint $table) {
            $table->foreignId('topping_id')->constrained('toppings')->onDelete('cascade');
            $table->foreignId('product_instance_id')->constrained('product_instances')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        // Drop foreign key constraint for invoices table
        Schema::table('invoices', function (Blueprint $table) {
            $table->dropForeign(['cus_id']);
        });

        // Drop foreign key constraints for invoice_details table
        Schema::table('invoice_details', function (Blueprint $table) {
            $table->dropForeign(['invoice_id']);
            $table->dropForeign(['product_instance_id']);
        });

        // Drop foreign key constraint for products table
        Schema::table('products', function (Blueprint $table) {
            $table->dropForeign(['type_id']);
        });

        // Drop foreign key constraint for product_instances table
        Schema::table('product_instances', function (Blueprint $table) {
            $table->dropForeign(['product_id']);
        });

        // Drop foreign key constraints for product_toppings table
        Schema::table('product_toppings', function (Blueprint $table) {
            $table->dropForeign(['topping_id']);
            $table->dropForeign(['product_instance_id']);
        });
    }
};
