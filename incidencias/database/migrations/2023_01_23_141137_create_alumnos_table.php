<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Schema\ForeignKeyDefinition;
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
        Schema::create('alumnos', function (Blueprint $table) {
            $table->unsignedBigInteger('idGrupo');
            $table->unsignedBigInteger('numLista');
            $table->string('idAula');
            $table->unsignedBigInteger('idOrdenador');
            $table->timestamps();
            $table->primary(['idGrupo', 'numLista']);
            $table->foreign(['idAula', 'idOrdenador'])->references(['idAula', 'idOrdenador'])->on('aulas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alumnos');
    }
};
