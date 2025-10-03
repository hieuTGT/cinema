<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('quyen_han', function (Blueprint $table) {
            $table->id();
            $table->string('ten');
            $table->string('mo_ta')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('quyen_han');
    }
};
