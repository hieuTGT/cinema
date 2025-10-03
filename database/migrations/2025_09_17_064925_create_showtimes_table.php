<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
{
    Schema::create('showtimes', function (Blueprint $table) {
        $table->id();
        $table->foreignId('film_id')->constrained()->onDelete('cascade');
        $table->foreignId('room_id')->constrained()->onDelete('cascade');
        $table->dateTime('start_time');
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('showtimes');
}

};
