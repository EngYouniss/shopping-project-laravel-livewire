<?php

namespace App\Livewire\Admin\Orders;

use App\Models\Order;
use App\Models\Orders;
use Livewire\Component;
use Livewire\WithPagination;

class OrdersComponent extends Component
{
    use WithPagination;
    public $searchTerm;
public function render()
{
    $orders = Order::with('orderDetails.product', 'user')  // تجلب التفاصيل والعميل مع الطلب
        ->where('id', 'like', "%{$this->searchTerm}%")
        ->paginate(10);

    return view('admin.orders.orders-component', [
        'orders' => $orders
    ]);
}
}
