<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   public function up()
{
    Schema::create('seats', function (Blueprint $table) {
        $table->id();
        $table->foreignId('room_id')->constrained()->onDelete('cascade');
        $table->string('seat_number'); // A1, A2, B1...
        $table->enum('type', ['standard','vip','couple'])->default('standard');
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('seats');
}

};
