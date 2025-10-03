<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('dinh_dang', function (Blueprint $table) {
            $table->id();
            $table->string('ten');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dinh_dang');
    }
};
