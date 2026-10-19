<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('camp_gears', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('category');
            $table->unsignedInteger('rent_price');
            $table->unsignedInteger('stock');
            $table->string('image');
            $table->text('description');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('camp_gears');
    }
};
