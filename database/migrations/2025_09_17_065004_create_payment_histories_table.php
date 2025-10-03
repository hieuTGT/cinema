<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
{
    Schema::create('payment_histories', function (Blueprint $table) {
        $table->id();
        $table->foreignId('booking_id')->constrained()->onDelete('cascade');
        $table->string('method'); // Momo, VNPAY...
        $table->decimal('amount',10,2);
        $table->string('transaction_code')->nullable();
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('payment_histories');
}

};
