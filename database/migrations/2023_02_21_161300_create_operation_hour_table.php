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
        Schema::create('operation_hour', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('desc');
            $table->time('open_hour');
            $table->time('close_hour');
            $table->integer('days');
            $table->enum('is_active', [true, false]);
            $table->timestamp('last_updated');
            $table->string('updated_by');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('operation_hour');
    }
};
