<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Laravel

Sistema que gestiona los datos de servicio editorial publico de acuerdo a la solicitud del cliente:

Hay dos rutas de acuerdo: sobre cual debe leer el programa y ejecutar el proceso de almacenamiento en la base de datos?
Catálogo completo:

http://www.megustaleer.com/ajax/catalog.json

Novedades:

http://www.megustaleer.com/ajax/catalog_extendido_novedades.json

- La tabla del catálogo es una permanente que debe recibir altas y modificaciones.
- La tabla de novedades truntate cada vez y luego llenarla.
- Se supone que la tabla catálogo va a contener los registros de la tabla novedades.
- Los precios se deben llevar como un dato en las tablas catálogos y novedades, pero además hay que alimentar una tabla histórica de precios.
- Las imágenes se descargan automaticamente y se colocan en una ruta.

