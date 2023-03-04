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
        Schema::create('sot_status_work', function (Blueprint $table) {
            $table->id();
            $table->integer('sq_no');
            $table->string('service_order_ticket_no');
            $table->foreignId('status_work_id')->constrained('work_status');
            $table->date('date_created');
            $table->text('notes');
            $table->string('updated_by');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sot_status_work');
    }
};
