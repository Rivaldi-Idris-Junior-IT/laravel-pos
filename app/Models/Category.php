<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;

    protected $table ='tblcategory';

    protected $fillable = 
    [
        'category_name','uuid'
    ];

    protected $hidden = [

    ];

    public function product()
    {
        return $this->hasMany(Product::class,'category_id');
    }


}
