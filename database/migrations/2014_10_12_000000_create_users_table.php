<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('rg');
            $table->string('cpf')->nullable(true);
            $table->string('matricula')->unique();
            $table->integer('escola_sede_id')->unsigned();
            $table->boolean('admin')->nullable();
            $table->boolean('user')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable(true);
            $table->string('cargo');
            $table->string('password');
            $table->integer('id_sala')->unsigned()->nullable(true);
            $table->boolean('status')->default(true);
            $table->string('observacao')->default("Sem observações.")->nullable(true);
            $table->boolean('mudou_senha')->default(0);
            $table->date('data_nascimento')->nullable(true);
            $table->integer('digito')->nullable(true);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};