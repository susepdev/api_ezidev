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
        Schema::create('part_received', function (Blueprint $table) {
            $table->id();
            $table->integer('so_ticket_no');
            $table->integer('pr_ticket_no');
            $table->integer('rr_ticket_no');
            $table->integer('part_order_request_no');
            $table->foreignId('supplier_id')->constrained('supplier');
            $table->string('supplier_name');
            $table->integer('part_no');
            $table->string('part_name');
            $table->string('part_sn');
            $table->integer('quantity');
            $table->string('updated_by');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('part_received');
    }
};
