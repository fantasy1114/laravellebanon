<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string("userrole");

            $table->string("users_view")->nullable();
            $table->string("users_write")->nullable();
            $table->string("users_create")->nullable();
            $table->string("users_delete")->nullable();
            $table->string("users_list");
            
            $table->string("companies_view")->nullable();
            $table->string("companies_write")->nullable();
            $table->string("companies_create")->nullable();
            $table->string("companies_delete")->nullable();
            $table->string("companies_list");
            
            $table->string("categories_view")->nullable();
            $table->string("categories_write")->nullable();
            $table->string("categories_create")->nullable();
            $table->string("categories_delete")->nullable();
            $table->string("categories_list");
            
            $table->string("items_view")->nullable();
            $table->string("items_write")->nullable();
            $table->string("items_create")->nullable();
            $table->string("items_delete")->nullable();
            $table->string("items_list");
            // siteinfo
            $table->string("siteinfo_view")->nullable();
            $table->string("siteinfo_write")->nullable();
            $table->string("siteinfo_create")->nullable();
            $table->string("siteinfo_delete")->nullable();
            $table->string("siteinfo_list");

            // staticinfo
            $table->string("staticinfo_view")->nullable();
            $table->string("staticinfo_write")->nullable();
            $table->string("staticinfo_create")->nullable();
            $table->string("staticinfo_delete")->nullable();
            $table->string("staticinfo_list");

            // pricing
            $table->string("pricing_view")->nullable();
            $table->string("pricing_write")->nullable();
            $table->string("pricing_create")->nullable();
            $table->string("pricing_delete")->nullable();
            $table->string("pricing_list");

            // currency 
            $table->string("currency_view")->nullable();
            $table->string("currency_write")->nullable();
            $table->string("currency_create")->nullable();
            $table->string("currency_delete")->nullable();
            $table->string("currency_list");

            // Blogs
            $table->string("blog_view")->nullable();
            $table->string("blog_write")->nullable();
            $table->string("blog_create")->nullable();
            $table->string("blog_delete")->nullable();
            $table->string("blog_list")->nullable();
            
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
        Schema::dropIfExists('roles');
    }
}
