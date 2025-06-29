<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
protected $fillable = [
    'name',
    'price',
    'category_id',
    'stock',
    'image',
    'status',
    'description',
];

    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function getImageAttribute($image){
        return asset('storage/'.$image);
    }
}
