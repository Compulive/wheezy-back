<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria4 extends Model
{
    protected $table = 'categoria4';
    public $timestamps = false;
    protected  $primaryKey = 'categoria4_id';
    protected $fillable = ['categoria4_id',
        'categoria4_codigo',
        'categoria4_descripcion',
        'categoria4_descripcion_corta',
        'categoria4_cat'];
}
