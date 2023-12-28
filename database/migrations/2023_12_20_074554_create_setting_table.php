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
        Schema::create('setting', function (Blueprint $table) {
            $table->increments('id');
            $table->string('site_name');
            $table->text('site_info');
            $table->text('site_description');
            $table->string('facebook');
            $table->string('instagram');
            $table->string('linkend');
            $table->string('contact_no');
            $table->text('contact_info');
            $table->string('contact_address');
            $table->text('contact_description');
            $table->string('contact_email');
            $table->string('contact_image');
            $table->text('goal');
            $table->text('objective');
            $table->text('client_description');
            $table->text('project_description');
            $table->text('service_description');
            $table->text('about_caption');
            $table->text('about_description');
            $table->string('about_image');
            $table->string('about_bg_image');
            $table->string('site_logo');
            $table->string('meta');
            $table->string('meta_keyword');
            $table->text('meta_description');
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
        Schema::dropIfExists('setting');
    }
};
