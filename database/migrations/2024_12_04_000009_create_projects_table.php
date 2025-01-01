<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->longText('short_description')->nullable();
            $table->longText('description');
            $table->string('service');
            $table->string('duration');
            $table->string('team');
            $table->longText('long_description');
            $table->string('quotation_text')->nullable();
            $table->string('live_url')->nullable();
            $table->timestamps();
        });
    }
}
