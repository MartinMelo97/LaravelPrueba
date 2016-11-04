<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    protected $table = "Articulos";
    protected $fillable = ['title','content','categoria_id','user_id'];

    public function Categoria(){
    	return $this->belongsTo('App\Categoria');
    }

    public function User(){
    	return $this->belongsTo('App\User');
    }

    public function Imagenes(){
    	return $this->hasMany('App\Imagen');
    }

    public function Tags(){
    	return $this->belongsToMany('App\Tag')->withTimestamps();
    }
}
