<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('cache_locks', function (Blueprint $table) {
            $table->string('khoa')->primary();
            $table->string('chu_so_huu')->nullable();
            $table->integer('het_han')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cache_locks');
    }
};
