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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            //cloumn for foreign keys
            $table->unsignedBigInteger('comment_id')->nullable();
            $table->unsignedBigInteger('author_id')->nullable();
            //column for main blogs table
            $table->string('name')->nullable();
            $table->longText('description')->nullable();
            //liinking of foreign keys
            $table->foreign('comment_id')->references('id')->on('comments')->onDelete('cascade');
            $table->foreign('author_id')->references('id')->on('authors')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
