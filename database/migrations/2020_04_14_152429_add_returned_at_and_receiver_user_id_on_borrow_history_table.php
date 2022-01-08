<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddReturnedAtAndReceiverUserIdOnBorrowHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('borrow_history', function (Blueprint $table) {
            // method untuk buku itu di kembalikan kapan waktunya
            $table->dateTime('returned_at')->nullable()->default(null)->after('book_id');
            $table->bigInteger('admin_id')->nullable()->default(null)->after('returned_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('borrow_history', function (Blueprint $table) {
            //pertemuan ke 47 method untuk pengembalikan buku
            $table->dropColumn('returned_at');
            $table->dropColumn('admin_id');
        });
    }
}
