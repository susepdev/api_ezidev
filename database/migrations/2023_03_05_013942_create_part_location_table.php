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
        Schema::create('part_location', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('desc');
            $table->foreignId('user_id')->constrained('users');
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
        Schema::dropIfExists('part_location');
    }
};
