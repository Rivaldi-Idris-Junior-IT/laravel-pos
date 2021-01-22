<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GalleryProduct extends Model
{
    protected $table ='tblproductgallery';

    protected $fillable = [
        'products_id', 'photo', 'is_default'
    ];

    protected $hidden = [
        
    ];

    public function product()
    {
        return $this->belongsTo(Product::class,'products_id','uuid');
    }

    public function getPhotoAttribute($value)
    {
        return url('storage/' . $value);
    }
}
