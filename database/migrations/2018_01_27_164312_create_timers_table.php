<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTimersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('timers', function (Blueprint $table) {
              $table->increments('id');
              $table->string('name');
              $table->unsignedInteger('project_id');
              $table->unsignedInteger('user_id');
              $table->timestamp('started_at');
              $table->timestamp('stopped_at')->default(null)->nullable();
              $table->timestamps();

              $table->foreign('user_id')->references('id')->on('users');
              $table->foreign('project_id')->references('id')->on('projects');
          });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('timers');
    }
}
