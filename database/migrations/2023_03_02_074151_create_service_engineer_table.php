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
        Schema::create('service_engineer', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->string('se_id');
            $table->string('hp_no');
            $table->foreignId('team_leader_id')->constrained('team_leader');
            $table->boolean('is_active')->default(false);
            $table->foreignId('service_base_id')->constrained('service_base');
            $table->foreignId('region_id')->constrained('region');
            $table->string('updated_by');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_engineer');
    }
};
