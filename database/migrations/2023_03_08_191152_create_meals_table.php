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
        Schema::create('meals', function (Blueprint $table) {
            $table->id()->unique();
            $table->date('days_meal');
            $table->integer('snack_mornig');
            $table->integer('snack_afternoon');
            $table->integer('lunch');
            $table->integer('lunch_repeat');
            $table->integer('dinner');
            $table->integer('dinner_repeat');
            $table->integer('number_studens_mornig');
            $table->integer('number_students_afternoon');

            $table->softDeletes();
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
        Schema::dropIfExists('meals');
    }
};