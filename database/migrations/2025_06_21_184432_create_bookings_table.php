<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
  public function up()
{
    Schema::create('bookings', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('user_id');
        $table->unsignedBigInteger('venue_id');
        $table->timestamp('booking_date')->nullable();
        $table->time('start_time')->nullable();
        $table->time('end_time')->nullable();
        $table->decimal('total_amount', 8, 2)->nullable();
        $table->string('status')->default('pending'); // example: pending, confirmed, cancelled
        $table->softDeletes();
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
