<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKanjisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kanjis', function (Blueprint $table) {
            $table->id();
            $table->longText('kanji');
            $table->longText('cn_vn_word');
            $table->longText('meaning_vi');
            $table->longText('meaning_en');
            $table->string('status')->default('active');

            $table->unsignedBigInteger('level_id');
            $table->foreign('level_id')->references('id')->on('levels')->cascadeOnDelete();
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
        Schema::dropIfExists('kanjis');
    }
}
