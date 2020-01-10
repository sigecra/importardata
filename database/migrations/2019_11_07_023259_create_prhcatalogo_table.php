<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrhcatalogoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prhcatalogos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('matnr')->index();
            $table->string('isbn')->unique();
            $table->string('cod_autor') ;
            $table->string('titulo') ;
            $table->string('region') ;
            $table->string('digital') ;
            $table->string('autor') ;
            $table->string('cod_sello_editorial') ;
            $table->string('sello_editorial') ;
            $table->float('pvp') ;
            $table->string('coleccion') ;
            $table->string('genero_1') ;
            $table->date('fecha_nov') ;
            $table->text('sinopsis') ;
            $table->string('subtitulo') ;
            $table->string('url_booktrailer')->nullable();
            $table->text('narrador') ;
            $table->string('ilustrador') ;
            $table->string('traductor') ;
            $table->text('keywords') ;
            $table->integer('paginas') ;
            $table->string('medidas') ;
            $table->string('idioma') ;
            $table->string('zzbisac') ;
            $table->string('portada') ;
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
        Schema::dropIfExists('prhcatalogos');
    }
}
