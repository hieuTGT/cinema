<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('vai_tro', function (Blueprint $table) {
            $table->id(); // bigint auto increment
            $table->string('ten');
            $table->string('mo_ta')->nullable();
            $table->timestamps(); // ngay_tao & ngay_cap_nhat
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('vai_tro');
    }
};
