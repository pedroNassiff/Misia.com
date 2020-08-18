<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\Product as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Authenticatable
{
    use Notifiable;
    use softDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'status', 'name', 'color1', 'color2', 'color3', 'color4', 'color5', 'color6', 'color7', 'color8', 'color9', 'color10', 'color11', 'color12', 'cont-bust', 'cont-cint', 'cont-cadera', 'lar-cint', 'larg-mang', 'cont-bra', 'larg-taj', 'tip-bret', 'image', 'price', 'slug' 
    ];

    public function getProduct(){
        $product = $this->db->query("SELECT * FROM products;");
        return $product;
    }
}
