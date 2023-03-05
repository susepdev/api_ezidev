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
        Schema::create('last_status_part', function (Blueprint $table) {
            $table->id();
            $table->integer('sq_no');
            $table->integer('so_ticket_no');
            $table->integer('pr_ticket_no');
            $table->integer('rr_ticket_no');
            $table->foreignId('part_status_id')->constrained('part_status');
            $table->text('notes')->nullable();
            $table->string('updated_by');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('last_status_part');
    }
};
