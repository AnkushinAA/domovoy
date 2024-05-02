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
            $table->timestamps();
            $table->string('name');
            $table->integer('type_of_work_id');
            $table->integer('currency_id');
            $table->integer('employer_id');
            $table->integer('contractor_id')->nullable();
            $table->dateTime('published_at');
            $table->dateTime('start_at');
            $table->dateTime('finish_at');
            $table->dateTime('finished_at')->nullable();
            $table->string('order_photo_url')->default('');
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
