<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToCareersTable extends Migration
{
    public function up()
    {
        Schema::table('careers', function (Blueprint $table) {
            $table->dropColumn('job');
            $table->unsignedBigInteger('job_id')->nullable();
            $table->foreign('job_id', 'job_fk_10429427')->references('id')->on('jobs');
        });
    }
}
