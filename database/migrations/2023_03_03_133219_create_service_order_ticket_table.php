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
        Schema::create('service_order_ticket', function (Blueprint $table) {
            $table->id();
            $table->string('so_ticket_no');
            $table->foreignId('contract_id')->constrained('contract');
            $table->foreignId('customer_id')->constrained('customer');
            $table->foreignId('service_engineer_id')->constrained('service_engineer');
            $table->foreignId('on_duty_se_id')->constrained('service_engineer');
            $table->string('on_duty_se_hp');
            $table->foreignId('entity_id')->constrained('entity');
            $table->foreignId('machine_vendor_id')->constrained('machine_vendor');
            $table->foreignId('machine_model_id')->constrained('machine_model');
            $table->foreignId('machine_id')->constrained('machine');
            $table->string('machine_location');
            $table->foreignId('operation_hour_id')->constrained('operation_hour');
            $table->string('operation_hour_name');
            $table->foreignId('priority_id')->constrained('priority');
            $table->foreignId('severity_id')->constrained('severity');
            $table->foreignId('service_type_id')->constrained('service_type');
            $table->foreignId('problem_type_id')->constrained('problem_type');
            $table->string('problem_desc');
            $table->string('pic_name');
            $table->string('pic_hp');
            $table->string('pic_vendor');
            $table->foreignId('service_base_id')->constrained('service_base');
            $table->date('reported_date');
            $table->date('created_date');
            $table->date('closed_date');
            $table->string('last_status_work_id');
            $table->string('problem_finding');
            $table->string('corrective_action');
            $table->string('prt_no')->nullable();
            $table->time('ticket_duration');
            $table->foreignId('sla_response_id')->constrained('sla_response');
            $table->foreignId('sla_resolve_id')->constrained('sla_resolve');
            $table->foreignId('sla_resolution_id')->constrained('sla_resolution');
            $table->string('updated_by');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_order_ticket');
    }
};
