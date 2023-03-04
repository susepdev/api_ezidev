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
        Schema::create('prt_details', function (Blueprint $table) {
            $table->id();
            $table->string('part_request_ticket_no');
            $table->string('service_order_ticket_no');
            $table->string('customer_name');
            $table->foreignId('machine_id')->constrained('machine');
            $table->foreignId('service_engineer_id')->constrained('service_engineer');
            $table->string('problem_finding');
            $table->string('error_code')->nullable();
            $table->integer('last_requested_part_id')->nullable();
            $table->integer('quantity');
            $table->foreignId('logistic_staff_id')->constrained('logistic_staff');
            $table->integer('last_status_work_id');
            $table->time('ticket_duration');
            $table->unsignedBigInteger('approval_by')->nullable();
            $table->foreign('approval_by')->references('id')->on('users')->onDelete('cascade');
            $table->date('approval_date')->nullable();
            $table->date('created_date');
            $table->text('part_waiting_preparation_notes')->nullable();
            $table->date('accepted_date')->nullable();
            $table->integer('prepared_part_no');
            $table->integer('prepared_part_quantity');
            $table->unsignedBigInteger('prepared_by')->nullable();
            $table->foreign('prepared_by')->references('id')->on('logistic_staff')->onDelete('cascade');
            $table->text('part_on_preparation_notes')->nullable();
            $table->date('part_preparation_date');
            $table->integer('delivery_courier_id');
            $table->integer('tracking_no');
            $table->date('part_delivery_date')->nullable();
            $table->date('part_eta')->nullable();
            $table->foreignId('delivery_by')->constrained('logistic_staff');
            $table->date('received_part_date')->nullable();
            $table->string('part_received_status')->nullable();
            $table->string('updated_by');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prt_details');
    }
};
