<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    // public $table="images";

    // protected $primaryKey="Id_Image";

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
