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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->unique();
            $table->string('alias')->nullable();
            $table->string('name');
            $table->string('role')->nullable();
            $table->boolean('is_active')->default(false)->nullable();
            $table->string('adr')->nullable();
            $table->string('city')->nullable();
            $table->string('prov')->nullable();
            $table->integer('service_base_id')->nullable();
            $table->integer('time_zone_id')->nullable();
            $table->string('updated_by')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
