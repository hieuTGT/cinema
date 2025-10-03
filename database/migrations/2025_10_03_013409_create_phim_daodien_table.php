<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('phim_daodien', function (Blueprint $table) {
            $table->foreignId('phim_id')->constrained('phim');
            $table->foreignId('dao_dien_id')->constrained('dao_dien');
            $table->primary(['phim_id','dao_dien_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('phim_daodien');
    }
};
