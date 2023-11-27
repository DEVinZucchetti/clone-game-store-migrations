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
        Schema::create('products_assets', function (Blueprint $table) {
            $table->id();
            $table->BigInteger('product_id');
            $table->foreign('product_id')->references('id')->on('products');
            $table->string('name', 50);
            $table->string('url');
            $table->enum('types_games_assets', ['MINIMUNS', 'RECOMMENDED']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products_assets');
    }
};
