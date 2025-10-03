<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('combo_chitiet', function (Blueprint $table) {
            $table->foreignId('combo_id')->constrained('combo');
            $table->foreignId('san_pham_id')->constrained('san_pham');
            $table->integer('so_luong')->default(1);
            $table->primary(['combo_id','san_pham_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('combo_chitiet');
    }
};
