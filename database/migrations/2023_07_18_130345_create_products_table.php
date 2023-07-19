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
        Schema::create('products', function (Blueprint $table) {
            $table->id();

            $table->string('title');
            $table->text('description');
            $table->text('contents');
            $table->string('preview_image')->nullable();

            $table->unsignedInteger('price_old')->nullable();
            $table->unsignedInteger('price');
            $table->unsignedSmallInteger('count');
            $table->boolean('is_published')->default(false);

            $table->unsignedInteger('category_id');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
