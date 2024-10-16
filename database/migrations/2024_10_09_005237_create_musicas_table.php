<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMusicasTable extends Migration
{
    public function up()
    {
        Schema::create('musicas', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('artista');
            $table->string('palco');
            $table->date('data_show');
            $table->text('anotacoes')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('musicas');
    }
}
