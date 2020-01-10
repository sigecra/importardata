<?php

namespace App\Http\Controllers;

use App\Autore;
use App\Editorial;
use App\Paise;
use App\Prhnovedades;
use Illuminate\Http\Request;


class PrhnovedadesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // registro y actualizaciones de las novedades
    public static function importar()
    {
        
        set_time_limit(0);
        $json = file_get_contents('https://www.megustaleer.com/ajax/catalog_extendido_novedades.json');
        $objs = json_decode($json,true);
        foreach ($objs as $obj)  {
            foreach ($obj as $key => $value) {
                $insertArr[str_slug($key,'_')] = $value;
            }
            $isbn = array_get($insertArr, 'isbn');
            Prhnovedades::UpdateOrCreate( 
                ['isbn' => $isbn],
                 $insertArr );

        //REGISTRO DE AUTORES 
        $cod_autor=array_get($insertArr, 'cod_autor');
        $autor=array_get($insertArr, 'autor');
        Autore::UpdateOrCreate( 
            ['cod_autor' => $cod_autor],
            ['cod_autor' => $cod_autor,
            'autor' => $autor]);

        //REGISTRO DE EDITORIAL 
        $cod_sello_editorial=array_get($insertArr, 'cod_sello_editorial');
        $sello_editorial=array_get($insertArr, 'sello_editorial');
        Editorial::UpdateOrCreate( 
            ['cod_sello_editorial' => $cod_sello_editorial],
        ['cod_sello_editorial' => $cod_sello_editorial,
        'sello_editorial' => $sello_editorial]);
        
        //REGISTRO DE PAISES
        $region=array_get($insertArr, 'region');
        Paise::UpdateOrCreate( 
        ['codigopais' => $region],
        ['codigopais' => $region]);       

        //REGISTRAR IMAGENES
        $ruta='/var/www/html/directolaravel/imagen/';

        $portada=array_get($insertArr, 'portada');
        $imgportadanueva=$ruta.$isbn.'.jpg';
        $autor=array_get($insertArr, 'imagen_autor');
        $imgautornueva=$ruta.$isbn.'_1.jpg';

        if (@getimagesize($imgportadanueva))
        {
            //ya existe la imagn
        }
        else
        { 
            if (@getimagesize($portada))
            {   
                $imgportada = file_get_contents($portada);
                file_put_contents($imgportadanueva, $imgportada);
            } 
        }

        if (@getimagesize($imgautornueva))
        {
            //ya existe la imagn
        }
        else
        { 
            if (@getimagesize($autor))
            {
            $imgautor = file_get_contents($autor);
            file_put_contents($imgautornueva, $imgautor);
            }
        }       
   //     Phrnovedades::create($request->all());

    }
    dd("Registros insertados y actualizados");
}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
