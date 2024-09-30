<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id(); 
            $table->unsignedBigInteger('epl_id')->nullable(); 
            $table->unsignedBigInteger('cus_id'); 
            $table->boolean('is_online');
            $table->string('voucher')->nullable();
            $table->integer('total'); 
            $table->string('name');
            $table->string('phone');
            $table->string('email');
            $table->string('payment_method');
            $table->enum('status', ['pending', 'completed', 'canceled','rejected']);
            $table->string('address');
            $table->text('note')->nullable(); 
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
        Schema::table('invoice_details', function (Blueprint $table) {
            $table->dropForeign(['invoice_id']);
        });

    // Now you can safely drop the invoices table
        Schema::dropIfExists('invoices');
    }
}
