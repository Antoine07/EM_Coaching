<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterBooksAddFkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   

        // id 1 manager 1
        // id 2 manager 1
        Schema::table('books', function (Blueprint $table) {
            $table->unsignedBigInteger('manager')->nullable(); // UNSIGNED INTEGER un livre peut ne pas avoir de genre
            $table->foreign('manager')->references('id')->on('authors')->onDelete('SET NULL');
        }); 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('books', function (Blueprint $table) {
            $table->dropForeign('books_manager_foreign');
            $table->dropColumn('manager');
        });
    }
}
