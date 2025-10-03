<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('rap', function (Blueprint $table) {
            $table->id();
            $table->string('ten');
            $table->string('dia_chi')->nullable();
            $table->string('sdt', 50)->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('rap');
    }
};
