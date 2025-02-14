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
        Schema::create('cat_images', function (Blueprint $table) {
            $table->id();
            $table->string('_id')->unique();
            $table->string('mimetype');
            $table->integer('size');
            $table->json('tags');
            $table->timestamps();
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cat_images');
    }
};
