<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'image',
        'description'
    ];

    public function products(){
        return $this->hasMany(Product::class);
    }

     public function getImageAttribute($image){
        return asset('storage/'.$image);
    }
}
