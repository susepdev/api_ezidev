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
        Schema::create('customer', function (Blueprint $table) {
            $table->id();
            $table->string('alias');
            $table->string('name');
            $table->string('desc');
            $table->bigInteger('customer_type_id');
            $table->enum('is_active', [true, false]);
            $table->string('adr');
            $table->string('prov');
            $table->string('pic');
            $table->string('pic_hp');
            $table->timestamp('last_updated');
            $table->string('updated_by');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customer');
    }
};
