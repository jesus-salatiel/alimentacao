<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEscolaUserTable extends Migration {
    public function up() {
        Schema::create('escola_user', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('escola_id')->constrained('escolas');
            $table->timestamps();
        });

    }

    public function down() {
        Schema::dropIfExists('escola_user');
    }
}