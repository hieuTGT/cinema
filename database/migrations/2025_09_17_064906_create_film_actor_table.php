<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
{
    Schema::create('film_actor', function (Blueprint $table) {
        $table->id();
        $table->foreignId('film_id')->constrained()->onDelete('cascade');
        $table->foreignId('actor_id')->constrained()->onDelete('cascade');
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('film_actor');
}

};
