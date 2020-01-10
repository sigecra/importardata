<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrhnovedadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prhnovedades', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('matnr')->index();
            $table->string('manuscrito') ;
            $table->string('manuscrito_grupo') ;
            $table->string('isbn')->unique();
            $table->string('cod_autor');
            $table->string('titulo');
            $table->string('subtitulo');
            $table->string('region');
            $table->string('digital');
            $table->string('autor');
            $table->string('cod_sello_editorial');
            $table->string('sello_editorial');
            $table->float('pvp');
            $table->string('coleccion');
            $table->string('genero_1');
            $table->date('fecha_nov');
            $table->text('sinopsis');
            $table->text('contratapa');
            $table->integer('paginas');
            $table->string('medidas');
            $table->string('idioma');
            $table->string('cod_sector');
            $table->string('sector');
            $table->string('portada');
            $table->string('imagen_autor');
            $table->text('biografia');
            $table->string('url_autor');
            $table->string('url_libro');
            $table->string('ilustrador');
            $table->string('traductor');
            $table->string('keywords');
            $table->string('url_booktrailer')->nullable();
            $table->string('narrador');
            $table->string('duracion');
            $table->string('url_audiolibro');
            $table->string('formato');
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
        Schema::dropIfExists('prhnovedades');
    }
}
