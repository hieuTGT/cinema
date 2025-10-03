<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('failed_jobs', function (Blueprint $table) {
            $table->id();
            $table->string('uuid')->unique();
            $table->text('ket_noi')->nullable();
            $table->text('hang_doi')->nullable();
            $table->text('du_lieu')->nullable();
            $table->text('loi')->nullable();
            $table->dateTime('thoi_gian_that_bai')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('failed_jobs');
    }
};
