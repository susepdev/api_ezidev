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
        Schema::create('entity', function (Blueprint $table) {
            $table->id();
            $table->string('alias');
            $table->string('name');
            $table->text('desc');
            $table->boolean('is_active')->default(false);
            $table->string('adr');
            $table->string('prov');
            $table->string('owner');
            $table->string('hp');
            $table->string('updated_by');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('entity');
    }
};
