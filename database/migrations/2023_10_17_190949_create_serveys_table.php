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
        Schema::create('serveys', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('overall_cleanliness')->nullable();
            $table->string('customer_service')->nullable();
            $table->string('comport')->nullable();
            $table->string('process')->nullable();
            $table->string('recommend')->nullable();
            $table->string('others')->nullable();
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->boolean('status')->default(1);
            $table->string('updated_by')->nullable();
            $table->string('created_by')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('serveys');
    }
};
