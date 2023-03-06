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
        Schema::create('part_sales', function (Blueprint $table) {
            $table->id();
            $table->integer('part_sales_no');
            $table->integer('part_no');
            $table->string('part_name');
            $table->foreignId('last_part_status_id')->constrained('part_status');
            $table->integer('quantity');
            $table->foreignId('customer_id')->constrained('customer');
            $table->string('customer_name');
            $table->text('notes')->nullable();
            $table->string('pic_name');
            $table->string('pic_hp');
            $table->string('updated_by');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('part_sales');
    }
};
