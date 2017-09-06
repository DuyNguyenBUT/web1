<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->string('ten_sanpham');
            $table->string('ma_sanpham');
            $table->text('khac')->nullable();
            $table->string('gia',20);
            $table->string('giam_gia',20)->nullable();
            $table->string('img_path')->nullable();
            $table->text('thong_so');
            $table->string('so_luong',50)->default(0);
            $table->string('category_id',50);
            $table->boolean('homepage')->default(0);
            $table->boolean('delete')->default(0);
            $table->string('created_by',50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product');
    }
}
