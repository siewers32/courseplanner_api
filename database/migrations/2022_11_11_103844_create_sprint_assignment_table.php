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
        Schema::create('sprint_assignment', function (Blueprint $table) {
            $table->unsignedBigInteger('sprint_id');
            $table->unsignedBigInteger('assignment_id');
            $table->primary(['sprint_id', 'assignment_id']);
            $table->foreign('sprint_id')->references('id')->on('sprint');
            $table->foreign('assignment_id')->references('id')->on('assignment');
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
        Schema::dropIfExists('sprint_assignment');
    }
};
