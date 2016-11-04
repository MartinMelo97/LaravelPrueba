<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imagen extends Model
{
    protected $table = "Imagenes";
    protected $fillable = ['nombre','articulo_id'];

    public function Articulo(){
    	return $this->belongsTo('App\Articulo');
    }
}
