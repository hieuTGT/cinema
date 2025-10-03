<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('bao_cao_doanh_thu_suat', function (Blueprint $table) {
            $table->id();
            $table->foreignId('suat_chieu_id')->constrained('suat_chieu');
            $table->integer('tong_ve')->default(0);
            $table->decimal('tong_tien', 12, 2)->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('bao_cao_doanh_thu_suat');
    }
};
