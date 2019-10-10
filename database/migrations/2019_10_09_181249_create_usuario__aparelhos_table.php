<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuarioAparelhosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario_aparelhos', function (Blueprint $table) {
            $table->BigInteger('usuario_id')->unsigned();
            $table->foreign('usuario_id')->references('id')->on('usuarios');
            $table->BigInteger('aparelho_id')->unsigned();
            $table->foreign('aparelho_id')->references('id')->on('aparelhos');
            $table->timestamps();
            $table->primary(['aparelho_id', 'usuario_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuario_aparelhos');
    }
}
