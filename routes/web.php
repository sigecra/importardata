<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', 'PrhnovedadesController@importar');
Route::get('/catalogo', 'PrhcatalogoController@importar');


/*Route::get('/insert', function(){
	$json = file_get_contents('http://www.megustaleer.com/ajax/catalog_extendido_novedades.json');
	$objs = json_decode($json,true);
	foreach ($objs as $obj)  {
		foreach ($obj as $key => $value) {
			$insertArr[Str::slug($key,'_')] = $value;
		}
		DB::table('phrnovedades')->insert($insertArr);
	}
	dd("Finished adding data in examples table");
});
*/
