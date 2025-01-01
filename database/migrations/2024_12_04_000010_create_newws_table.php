<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewwsTable extends Migration
{
    public function up()
    {
        Schema::create('newws', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->date('date')->nullable();
            $table->boolean('published')->default(0)->nullable();
            $table->longText('short_description');
            $table->longText('description')->nullable();
            $table->string('inner_image')->nullable();
            $table->timestamps();
        });
    }
}
