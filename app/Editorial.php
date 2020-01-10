<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Editorial extends Model
{
    //
    protected $primaryKey = 'cod_sello_editorial';
    protected $keyType = 'string';
    protected $fillable = ['cod_sello_editorial','sello_editorial'];
    protected $guarded = ['id'];
}
