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
        Schema::create('smart_home_device_images', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('smart_home_device_id');
            $table->string('image');
            $table->timestamps();

            $table->foreign('smart_home_device_id')
                ->references('id')
                ->on('smart_home_devices')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('smart_home_device_images');
    }
};
