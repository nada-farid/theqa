<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStrategiesTable extends Migration
{
    public function up()
    {
        Schema::create('strategies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->json('title');
            $table->json('description');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
