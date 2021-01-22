<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    protected $table ='tblproduct';

    protected $fillable = 
    [
        'uuid','name','slug','category_id','description','price','quantity'
    ];

    protected $hidden = [

    ];

    public function category()
    {
        return $this->belongsTo(Category::class,'category_id','uuid');
    }

}
