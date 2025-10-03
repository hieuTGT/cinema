<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateUsersTable extends Migration
{
public function up()
{
    Schema::create('users', function (Blueprint $table) {
    $table->id();
    $table->string('fullname', 100)->nullable();
    $table->string('email', 100)->unique();
    $table->timestamp('email_verified_at')->nullable();
    $table->string('password');
    $table->string('phone', 20)->nullable();
    $table->string('membership_level', 50)->default('basic');
    $table->integer('points')->default(0);
    $table->rememberToken();
    $table->timestamps();
});

}

public function down()
{
    Schema::dropIfExists('users');
}

}
