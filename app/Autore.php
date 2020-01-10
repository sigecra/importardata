<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Autore extends Model
{
    //
    protected $primaryKey = 'cod_autor';
    protected $keyType = 'string';
    protected $fillable = ['cod_autor','autor'];
    protected $guarded = ['cod_autor'];
}
