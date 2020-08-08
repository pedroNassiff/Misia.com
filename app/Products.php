<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\Producto as Authenticatable;
use Illuminate\Notifications\Notifiable;


class Producto extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'nombre', 'descripcion', 'precio', 'stock', 'categoria_id', 'oferta', 'fecha', 'imagen',
    ];

    public function getProducto(){
        $producto = $this->db->query("SELECT * FROM producto;");
        return $producto;
    }
}
