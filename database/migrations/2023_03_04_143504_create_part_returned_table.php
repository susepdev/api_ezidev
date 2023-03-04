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
        Schema::create('part_returned', function (Blueprint $table) {
            $table->id();
            $table->integer('rr_ticket_no');
            $table->string('part_name');
            $table->string('part_sn');
            $table->integer('part_no');
            $table->text('part_return_notes');
            $table->date('part_return_date');
            $table->string('updated_by');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('part_returned');
    }
};
