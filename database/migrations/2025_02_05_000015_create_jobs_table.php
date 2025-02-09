<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->json('title');
            $table->json('description');
            $table->timestamps();
        });
    }

    public function down(){
        Schema::dropIfExists('jobs');
    }
}
