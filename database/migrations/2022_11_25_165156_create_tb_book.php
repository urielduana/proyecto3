<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_book', function (Blueprint $table) {
            $table->increments('Id_book');
            $table->bigInteger('Isbn');
            $table->string('Title');
            $table->string('Author');
            $table->integer('Number_page');
            $table->string('Editorial_name');
            $table->string('Editorial_email');
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
        Schema::dropIfExists('tb_book');
    }
};
