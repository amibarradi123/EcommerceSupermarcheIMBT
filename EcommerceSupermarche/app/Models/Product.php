<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public $table="produits";

    protected $primaryKey="Id_Produit";

 public function image()
 {
     return $this->hasMany(Image::class,'Id_Produit');
 }
}