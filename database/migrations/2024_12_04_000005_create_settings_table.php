<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->json('description')->nullable();
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->string('email')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('youtubte')->nullable();
            $table->json('about_description')->nullable();
            $table->string('site_name')->nullable();
            $table->string('instagram')->nullable();
            $table->json('chairman_description')->nullable();
            $table->string('counter_1_text')->nullable();
            $table->integer('counter_1_value')->nullable();
            $table->string('counter_2_text')->nullable();
            $table->integer('counter_2_value')->nullable();
            $table->string('counter_3_text')->nullable();
            $table->integer('counter_3_value')->nullable();
            $table->string('counter_4_text')->nullable();
            $table->integer('counter_4_value')->nullable();
            $table->json('short_descrption')->nullable();
            $table->json('contact_text')->nullable();
            $table->json('vision_text')->nullable();
            $table->json('mission_text')->nullable();
            $table-> json('why_us_text')->nullable();
            $table->json('home_section_1')->nullable();
            $table->json('home_section_2')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
