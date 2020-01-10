<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prhnovedades extends Model
{
protected $fillable = [
'matnr','manuscrito','manuscrito_grupo','isbn','cod_autor'
,'titulo','subtitulo','region','digital','autor','cod_sello_editorial'
,'sello_editorial','pvp','coleccion','genero_1','fecha_nov','sinopsis'
,'contratapa','paginas','medidas','idioma','cod_sector','sector'
,'portada','imagen_autor','biografia','url_autor','url_libro','ilustrador'
,'traductor','keywords','url_booktrailer','narrador','duracion'
,'url_audiolibro','formato'];
protected $guarded = ['isbn'];

}
