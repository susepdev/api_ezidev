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
        Schema::create('repair_center_engineer', function (Blueprint $table) {
            $table->id();
            $table->string('rce_id');
            $table->string('alias');
            $table->string('name');
            $table->boolean('is_active')->default(false);
            $table->foreignId('time_zone_id')->constrained('time_zone');
            $table->string('updated_by');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('repair_center_engineer');
    }
};
