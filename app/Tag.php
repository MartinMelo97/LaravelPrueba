<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = "Tags";
    protected $fillable = ['nombre'];

    public function Articulos(){
    	return $this->belongsToMany('App\Articulo')->withTimestamps();
    }
}
