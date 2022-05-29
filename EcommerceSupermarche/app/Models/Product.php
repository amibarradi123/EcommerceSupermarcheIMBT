<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;


    public $timestamps = false;
    public $table="produits";
    protected $primaryKey="Id_Produit";
    protected $fillable = ['Nom_Produit', 'Prix_Produit', 'Quantite_Produit', 'Id_Categorie'];

 public function image()
 {
     return $this->hasMany(Image::class,'Id_Produit');
 }

 public function category()
    {
        return $this->AsOne(category::class);
    }
}