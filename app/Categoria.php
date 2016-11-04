<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = "Categorias";
    protected $fillable = ['nombre'];

    public function Articulos(){
    	return $this->hasMany('App\Articulo');
    }
}
