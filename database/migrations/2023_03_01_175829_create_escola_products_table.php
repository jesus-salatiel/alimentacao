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
        Schema::create('escola_products', function (Blueprint $table) {

            $table->id();
            $table->string('produto');
            $table->string('categoria');
            $table->string('descricao');
            $table->float('quantidade')->default(0);
            //$table->string('id_categoria');
            $table->string('fornecedor');
            $table->string('escola_sede_id')->default('');
            $table->string('usuario')->default('');

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
        Schema::dropIfExists('escola_products');
    }
};