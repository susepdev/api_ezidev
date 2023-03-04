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
        Schema::create('part_order_request', function (Blueprint $table) {
            $table->id();
            $table->integer('part_order_request_no');
            $table->integer('part_no');
            $table->string('part_name');
            $table->integer('quantity');
            $table->text('notes');
            $table->string('supporting_doc');
            $table->string('updated_by');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('part_order_request');
    }
};
