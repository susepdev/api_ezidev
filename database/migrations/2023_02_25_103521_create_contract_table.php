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
        Schema::create('contract', function (Blueprint $table) {
            $table->id();
            $table->string('contract_no');
            $table->foreignId('customer_id')->constrained('customer')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('sla_response_id')->constrained('sla_response')->cascadeOnUpdate()->cascadeOnDelete();;
            $table->foreignId('sla_resolve_id')->constrained('sla_resolve')->cascadeOnUpdate()->cascadeOnDelete();;
            $table->foreignId('sla_resolution_id')->constrained('sla_resolution')->cascadeOnUpdate()->cascadeOnDelete();;
            $table->foreignId('sla_pm_id')->constrained('sla_pm')->cascadeOnUpdate()->cascadeOnDelete();;
            $table->timestamp('start_date');
            $table->timestamp('end_date');
            $table->string('renewal_status');
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
        Schema::dropIfExists('contract');
    }
};
