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
        Schema::create('part_inventory', function (Blueprint $table) {
            $table->id();
            $table->integer('part_no');
            $table->string('part_name');
            $table->text('part_desc')->nullable();
            $table->string('machine_model');
            $table->foreignId('part_type')->constrained('part_type');
            $table->string('part_sn');
            $table->string('part_status');
            $table->string('part_location');
            $table->foreignId('bin_location')->constrained('bin_location');
            $table->integer('quantity');
            $table->string('updated_by');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('part_inventory');
    }
};
