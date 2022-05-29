<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    public $table="images_produit";

    protected $primaryKey="Id_Image";

    protected $fillable = 
    [
        'url_Image', 'Id_Produit'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'Id_Produit');
    }
}
