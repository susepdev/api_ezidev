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
        Schema::create('part_request', function (Blueprint $table) {
            $table->id();
            $table->integer('sq_no');
            $table->string('prt_no');
            $table->string('sot_no');
            $table->string('part_no');
            $table->string('part_name');
            $table->string('updated_by');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('part_request');
    }
};
