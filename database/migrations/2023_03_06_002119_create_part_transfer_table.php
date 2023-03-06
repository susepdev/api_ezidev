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
        Schema::create('part_transfer', function (Blueprint $table) {
            $table->id();
            $table->integer('part_transfer_no');
            $table->foreignId('location_id')->constrained('bin_location');
            $table->foreignId('part_type_id')->constrained('part_type');
            $table->string('part_type_name');
            $table->integer('part_no');
            $table->string('part_sn');
            $table->integer('quantity');
            $table->foreignId('last_part_status_id')->constrained('part_status');
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
        Schema::dropIfExists('part_transfer');
    }
};
