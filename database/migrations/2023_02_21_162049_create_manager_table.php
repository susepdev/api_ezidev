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
        Schema::create('manager', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('alias');
            $table->string('name');
            $table->enum('is_active', [true, false]);
            $table->integer('timezone_id');
            $table->timestamp('last_updated');
            $table->string('updated_by');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('manager');
    }
};
