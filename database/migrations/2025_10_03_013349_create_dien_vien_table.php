<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('dien_vien', function (Blueprint $table) {
            $table->id();
            $table->string('ten');
            $table->text('tieu_su')->nullable();
            $table->date('ngay_sinh')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dien_vien');
    }
};
