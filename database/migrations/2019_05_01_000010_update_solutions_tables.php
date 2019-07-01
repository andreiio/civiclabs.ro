<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class UpdateSolutionsTables extends Migration
{
    public function up()
    {
        Schema::table('solutions', function (Blueprint $table) {
            $table->json('repositories')->nullable();
        });
    }

    public function down()
    {
        //
    }
}
