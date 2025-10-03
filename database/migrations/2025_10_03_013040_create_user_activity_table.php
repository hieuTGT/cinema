<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('user_activity', function (Blueprint $table) {
            $table->id();
            $table->foreignId('nguoi_dung_id')->constrained('nguoi_dung');
            $table->string('hanh_dong');
            $table->string('bang');
            $table->bigInteger('ban_ghi_id')->nullable();
            $table->text('mo_ta')->nullable();
            $table->timestamp('ngay_tao')->useCurrent();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('user_activity');
    }
};
