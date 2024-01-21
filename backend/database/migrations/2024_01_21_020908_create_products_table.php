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
            $table->increments('id'); //ใช้ increments ตัวเลขไม่เกิน 10 หลัก
            $table->string('name');
            $table->string('slug');
            $table->string('description')->nullable(); //อนุญาตให้ใส่ค่าว่างได้
            $table->decimal('price' , 9 , 2); // เลข 9 หลักและจุดทศนิยม 2 ตำแหน่ง
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
