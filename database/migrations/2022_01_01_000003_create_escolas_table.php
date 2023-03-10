<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEscolasTable extends Migration {
    public function up() {
        Schema::create('escolas', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->integer('cie')->unique();
            $table->string('regiao');
            $table->string('bairro');
            $table->string('endereco');
            $table->string('observacao')->default("Sem observações.")->nullable(true);
            $table->string('telefone');
            $table->string('email');
            $table->string('tipo_ensino');
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('escolas');
    }
}

// App\Models\Escola::create(['nome' => 'escola 1', 'cie' => 1, 'regiao' => 'sul', 'bairro' => 'centro', 'endereco' => 'rua 1']);