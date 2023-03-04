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
        Schema::create('rrt_details', function (Blueprint $table) {
            $table->id();
            $table->integer('rr_ticket_no');
            $table->integer('so_ticket_no');
            $table->integer('pr_ticket_no');
            $table->foreignId('part_id')->constrained('part');
            $table->string('part_name');
            $table->string('part_sn');
            $table->foreignId('customer_id')->constrained('customer');
            $table->foreignId('service_type_id')->constrained('service_type');
            $table->foreignId('contract_id')->constrained('contract');
            $table->date('created_date');
            $table->date('accepted_date')->nullable();
            $table->foreignId('repair_center_engineer_id')->constrained('repair_center_engineer');
            $table->date('repair_started_date');
            $table->string('repair_action');
            $table->foreignId('part_usage_id')->constrained('part_usage');
            $table->string('part_usage_name');
            $table->integer('part_usage_quantity');
            $table->string('last_repaired_part_status')->nullable();
            $table->string('last_repaired_progress_status')->nullable();
            $table->date('repair_stopped_date')->nullable();
            $table->text('part_return_notes')->nullable();
            $table->date('part_return_date')->nullable();
            $table->string('last_status_work_id')->nullable();
            $table->time('ticket_duration');
            $table->string('updated_by');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rrt_details');
    }
};
