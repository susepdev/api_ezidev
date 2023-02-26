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
        Schema::dropIfExists('operation_hour');
    }
};
