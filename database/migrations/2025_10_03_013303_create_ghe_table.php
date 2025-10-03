<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('ghe', function (Blueprint $table) {
            $table->id();
            $table->foreignId('phong_id')->constrained('phong_chieu');
            $table->string('hang', 10);
            $table->integer('cot');
            $table->enum('loai', ['thuong', 'vip', 'doi']);
            $table->enum('trang_thai', ['hoat_dong','hong','bao_tri'])->default('hoat_dong');
            $table->timestamps();
            $table->softDeletes(); // ngay_xoa
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('ghe');
    }
};
