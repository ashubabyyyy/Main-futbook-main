<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
  public function up(): void
{
    Schema::create('tournaments', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->date('registration_end');
        $table->enum('status', ['open', 'closed']);
        $table->date('start_date');
        $table->softDeletes(); // For deleted_at
        $table->timestamps();  // For created_at and updated_at
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tournaments');
    }
};
