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
            $table->foreignId('user_id')->constrained('users'); //foreign key to table users
            $table->integer('mgr_id');
            $table->string('alias');
            $table->string('name');
            $table->boolean('is_active')->default(false);
            $table->foreignId('timezone_id')->constrained('time_zone'); //foreign key to table time_zone
            $table->string('updated_by');
            $table->timestamps();
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
