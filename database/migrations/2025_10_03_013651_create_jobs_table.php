<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('hang_doi')->nullable();
            $table->text('du_lieu')->nullable();
            $table->integer('so_lan_thu')->default(0);
            $table->integer('thoi_gian_giu')->nullable();
            $table->integer('thoi_gian_san_sang')->nullable();
            $table->integer('ngay_tao')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('jobs');
    }
};
