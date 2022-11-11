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
        Schema::create('sprint_competence', function (Blueprint $table) {
            $table->unsignedBigInteger('sprint_id');
            $table->unsignedBigInteger('competence_id');
            $table->primary(['sprint_id', 'competence_id']);
            $table->foreign('sprint_id')->references('id')->on('sprint');
            $table->foreign('competence_id')->references('id')->on('competence');
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
        Schema::dropIfExists('sprint_competence');
    }
};
