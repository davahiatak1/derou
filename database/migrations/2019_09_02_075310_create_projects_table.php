<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('project_type_id')->unsigned();
            $table->foreign('project_type_id')->references('id')->on('project_types')->onDelete('cascade');
            /*$table->bigInteger('local_id')->unsigned();
            $table->foreign('local_id')->references('id')->on('locals')->onDelete('cascade');*/
            $table->string('image')->nullable();
            $table->text('title')->nullable();
            $table->longText('body')->nullable();
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
        Schema::dropIfExists('projects');
    }
}
