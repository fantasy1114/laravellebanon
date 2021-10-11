<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaticinfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staticinfos', function (Blueprint $table) {
            $table->id();
            $table->string("home_title")->nullable();
            $table->string("home_desc")->nullable();
            $table->string("home_image")->nullable();

            $table->string("about_one_title")->nullable();
            $table->string("about_one_desc")->nullable();
            $table->string("about_two_title")->nullable();
            $table->string("about_two_desc")->nullable();
            $table->string("about_three_title")->nullable();
            $table->string("about_three_desc")->nullable();
            $table->string("about_title")->nullable();
            $table->string("about_desc")->nullable();
            $table->string("about_image")->nullable();

            $table->string("service_title")->nullable();
            $table->string("service_desc")->nullable();
            $table->string("service_one_title")->nullable();
            $table->string("service_one_desc")->nullable();
            $table->string("service_two_title")->nullable();
            $table->string("service_two_desc")->nullable();
            $table->string("service_three_title")->nullable();
            $table->string("service_three_desc")->nullable();
            $table->string("service_four_title")->nullable();
            $table->string("service_four_desc")->nullable();
            $table->string("service_five_title")->nullable();
            $table->string("service_five_desc")->nullable();
            $table->string("service_six_title")->nullable();
            $table->string("service_six_desc")->nullable();

            $table->string("showcase_title")->nullable();
            $table->string("showcase_desc")->nullable();

            $table->string("pricing_title")->nullable();
            $table->string("pricing_desc")->nullable();
            $table->string("pricing_video_link")->nullable();

            $table->string("team_title")->nullable();
            $table->string("team_desc")->nullable();

            $table->string("blog_title")->nullable();
            $table->string("blog_desc")->nullable();

            $table->string("contact_title")->nullable();
            $table->string("contact_desc")->nullable();

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
        Schema::dropIfExists('staticinfos');
    }
}
