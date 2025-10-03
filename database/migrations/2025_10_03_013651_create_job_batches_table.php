<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('job_batches', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('ten')->nullable();
            $table->integer('tong_cong_viec')->default(0);
            $table->integer('cong_viec_dang_cho')->default(0);
            $table->integer('cong_viec_that_bai')->default(0);
            $table->text('danh_sach_that_bai')->nullable();
            $table->text('tuy_chon')->nullable();
            $table->integer('huy_luc')->nullable();
            $table->integer('ngay_tao')->nullable();
            $table->integer('hoan_thanh')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('job_batches');
    }
};
