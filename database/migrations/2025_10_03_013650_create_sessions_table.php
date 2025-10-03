<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('nguoi_dung_id')->nullable()->constrained('nguoi_dung');
            $table->string('dia_chi_ip')->nullable();
            $table->text('thong_tin_trinh_duyet')->nullable();
            $table->text('du_lieu')->nullable();
            $table->integer('hoat_dong_cuoi')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('sessions');
    }
};
