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
        Schema::create('incidencias', function (Blueprint $table) {
            $table->id();
            $table->string('idAula');
            $table->unsignedBigInteger('idOrdenador');
            $table->unsignedBigInteger('idProfesor');
            $table->unsignedBigInteger('idAveria');
            $table->timestamps();
            $table->text('Observaciones');
            $table->foreign(['idAula', 'idOrdenador'])->references(['idAula', 'idOrdenador'])->on('aulas')->onDelete('cascade');
            $table->foreign('idProfesor')->references('id')->on('profesors')->onDelete('cascade');
            $table->foreign('idAveria')->references('id')->on('averias')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('incidencias');
    }
};
