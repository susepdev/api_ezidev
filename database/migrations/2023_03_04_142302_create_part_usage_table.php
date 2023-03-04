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
        Schema::create('part_usage', function (Blueprint $table) {
            $table->id();
            $table->integer('so_ticket_no');
            $table->integer('rr_ticket_no');
            $table->string('part_name');
            $table->integer('part_quantity');
            $table->string('updated_by');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('part_usage');
    }
};
