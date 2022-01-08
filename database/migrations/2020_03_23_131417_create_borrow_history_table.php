<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBorrowHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('borrow_history', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id'); // ke table authors
            $table->unsignedBigInteger('book_id'); // ke table authors
            $table->timestamps();

             //table foreach key
             $table->foreign('user_id')->references('id')->on('users') // di arahkan ke tabel authors
             ->onUpdate('CASCADE')
             ->unDelete('CASCADE');

            //table foreach key
            $table->foreign('book_id')->references('id')->on('books') // di arahkan ke tabel authors
            ->onUpdate('CASCADE')
            ->unDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('borrow_history');
    }
}
