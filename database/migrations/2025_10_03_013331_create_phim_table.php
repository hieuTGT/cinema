<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('phim', function (Blueprint $table) {
            $table->id();
            $table->string('tieu_de');
            $table->text('mo_ta')->nullable();
            $table->string('anh_poster')->nullable();
            $table->string('trailer')->nullable();
            $table->boolean('phu_de')->default(false);
            $table->integer('thoi_luong')->nullable();
            $table->date('ngay_cong_chieu')->nullable();
            $table->integer('do_tuoi_gioi_han')->nullable();
            $table->foreignId('danh_muc_id')->nullable()->constrained('danh_muc');
            $table->foreignId('ngon_ngu_id')->nullable()->constrained('ngon_ngu');
            $table->timestamps();
            $table->softDeletes(); // ngay_xoa
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('phim');
    }
};
