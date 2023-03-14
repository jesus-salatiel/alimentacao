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
            $table->string('days_meal');
            $table->integer('snack_mornig')->default(0);
            $table->integer('snack_afternoon')->default(0);
            $table->integer('lunch')->default(0);
            $table->integer('lunch_repeat')->default(0);
            $table->integer('dinner')->default(0);
            $table->integer('dinner_repeat')->default(0);
            $table->integer('number_students_mornig')->default(0);
            $table->integer('number_students_afternoon')->default(0);

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