<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('bao_cao_doanh_thu_nhanvien', function (Blueprint $table) {
            $table->id();
            $table->foreignId('nhan_vien_id')->constrained('nguoi_dung');
            $table->date('ngay');
            $table->integer('tong_don')->default(0);
            $table->decimal('tong_tien', 12, 2)->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('bao_cao_doanh_thu_nhanvien');
    }
};
