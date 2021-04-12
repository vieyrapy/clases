<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
  protected $table= 'productos';

  protected $fillable = [
    'id_productos',  'nombre_producto', 'precio', 'id_marcas', 'id_categorias'
  ];

  public function marcas(){

    return $this->belongsTo('app/Models/Marca');
  }
  
  public function categorias(){

    return $this->belongsTo('app/Models/Categoria');
  }
}

