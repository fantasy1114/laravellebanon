<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->nullable()->references('id')->on('categories');
            $table->string('categoryname');
            $table->string('title');
            $table->string('description');
            $table->string('photo');
            $table->string('usprice');
            $table->string('lbpprice')->nullable();
            $table->string('marker')->nullable();
            $table->string('quantity')->nullable();
            $table->string('status')->nullable();
            $table->unsignedBigInteger('users_id');
            $table->foreign('users_id')->nullable()->references('id')->on('users');
            
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
        Schema::dropIfExists('items');
    }
}
