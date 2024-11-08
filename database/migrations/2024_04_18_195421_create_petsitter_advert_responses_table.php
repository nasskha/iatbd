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
        Schema::create('petsitter_advert_responses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('petsitter_advert_id')->constrained()->cascadeOnDelete();
            $table->integer('target_user_id');
            $table->foreignId('user_id')->constrained()->cascadeOnDelete(); // user who responded
            $table->text('message');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('petsitter_advert_responses');
    }
};
