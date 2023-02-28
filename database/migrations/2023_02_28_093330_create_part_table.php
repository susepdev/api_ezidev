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
        Schema::create('part', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('part_no');
            $table->string('part_sn');
            $table->text('desc');
            $table->foreignId('bin_location_id')->constrained('bin_location');
            $table->foreignId('part_status_id')->constrained('part_status');
            $table->foreignId('repaired_part_status_id')->constrained('repaired_part_status');
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
        Schema::dropIfExists('part');
    }
};
