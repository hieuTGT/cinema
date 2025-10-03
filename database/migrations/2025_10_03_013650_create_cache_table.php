<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('cache', function (Blueprint $table) {
            $table->string('khoa')->primary();
            $table->text('gia_tri')->nullable();
            $table->integer('het_han')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cache');
    }
};
