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
        Schema::create('threads', function (Blueprint $table) {
            $table->id();
            $table->string('category');
            $table->unsignedInteger('rating');
            $table->unsignedBigInteger('author');
            $table->text('title');
            $table->text('body');
            $table->unsignedBigInteger('art_post_id')->nullable(true);
            $table->unsignedBigInteger('gallery_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('threads');
    }
};
