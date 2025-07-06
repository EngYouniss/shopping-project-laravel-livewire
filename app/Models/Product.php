<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
protected $fillable = [
    'name',
    'price',
    'category_id',
    'stock',
    'image',
    'status',
    'description',
    'is_featured',
];

    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function offrers(){
        return $this->hasMany(Offer::class);
    }
    public function getImageAttribute($image){
        return asset('storage/'.$image);
    }
}
