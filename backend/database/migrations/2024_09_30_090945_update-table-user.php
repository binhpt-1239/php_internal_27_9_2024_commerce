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
       Schema::table('users', function (Blueprint $table) {
            $table->string('phone')->nullable(); 
            $table->enum('sex', ['male', 'female', 'other'])->nullable(); 
            $table->date('date_of_birth')->nullable();
            $table->string('avatar')->nullable(); 
            $table->text('address')->nullable(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('User', function (Blueprint $table) {
            $table->dropColumn('phone'); 
            $table->dropColumn('sex'); 
            $table->dropColumn('date_of_birth'); 
            $table->dropColumn('avatar'); 
            $table->dropColumn('address'); 
        });
    }
};
