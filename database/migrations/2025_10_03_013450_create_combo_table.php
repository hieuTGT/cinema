<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('combo', function (Blueprint $table) {
            $table->id();
            $table->string('ten');
            $table->decimal('gia', 12, 2);
            $table->text('mo_ta')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('combo');
    }
};
