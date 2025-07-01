<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Livewire\WithPagination;

class Order extends Model
{
    use HasFactory;
    public function orderDetails(){
        return $this->hasMany(OrderDetail::class, 'order_id');
    }

    public function user(){
    return  $this->belongsTo(User::class);
    }


}
