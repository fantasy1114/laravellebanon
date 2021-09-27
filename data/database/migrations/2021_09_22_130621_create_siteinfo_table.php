<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiteinfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siteinfo', function (Blueprint $table) {
            $table->id();
            $table->string('title')->default('NDS');
            $table->string('logo')->default('./uploads/logos/Untitled-1.png');
            $table->string('contacts')->default('support@gmail.com');;
            $table->string('lat')->default(33.8937913);
            $table->string('lng')->default(35.5017767);
            $table->string('phone')->default('+13453452315');
            $table->string('email')->default('support@gmail.com');
            $table->string('office')->default('');
            $table->string('whatapp')->default('+13453452315');
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
        Schema::dropIfExists('siteinfo');
    }
}
