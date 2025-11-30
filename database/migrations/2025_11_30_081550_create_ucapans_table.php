<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('ucapans', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('ucapan', 500);
            $table->boolean('is_approved')->default(true); // langsung tampil
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('ucapans');
    }
};