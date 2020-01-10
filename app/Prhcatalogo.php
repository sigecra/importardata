<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prhcatalogo extends Model
{
    //
    protected $fillable = [
       'matnr','isbn','cod_autor','titulo','region','digital','autor','cod_sello_editorial','sello_editorial',
       'pvp','coleccion','genero_1','fecha_nov','sinopsis','subtitulo','url_booktrailer','narrador',
       'ilustrador','traductor','keywords','paginas','medidas','idioma','zzbisac','portada'

    ];
    protected $guarded = ['isbn'];
}
