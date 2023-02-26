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
        Schema::create('team_leader', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users'); //foreign key to table users
            $table->integer('team_leader_id');
            $table->string('alias');
            $table->string('name');
            $table->foreignId('mgr_id')->constrained('manager'); //foreign key to table manager
            $table->boolean('is_active')->default(false);
            $table->foreignId('timezone_id')->constrained('time_zone'); //foreign key to table timezone
            $table->string('updated_by');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('team_leader');
    }
};
