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
        Schema::create('borrow_records', function (Blueprint $table) {
            $table->id('record_id');
            $table->foreignId('book_id')
            ->references('book_id')
            ->on('books')
            ->onDelete('cascade');
            $table->foreignId('user_id')
            ->references('user_id')
            ->on('users')
            ->onDelete('cascade');
            $table->date('borrow_date');
            $table->date('return_date');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('borrow_records');
    }
};
