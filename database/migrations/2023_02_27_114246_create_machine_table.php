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
        Schema::create('machine', function (Blueprint $table) {
            $table->id();
            $table->string('ws_id');
            $table->string('location_name');
            $table->string('location_adr');
            $table->foreignId('customer_id')->constrained('customer')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('contract_id')->constrained('contract')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('pm_period_id')->constrained('pm_period');
            $table->foreignId('operation_hour_id')->constrained('operation_hour')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('service_base_id')->constrained('service_base')->cascadeOnUpdate()->cascadeOnDelete();
            $table->boolean('is_active')->default(false);
            $table->string('updated_by');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('machine');
    }
};
