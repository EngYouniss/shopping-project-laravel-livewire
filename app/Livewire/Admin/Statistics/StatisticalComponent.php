<?php

namespace App\Livewire\Admin\Statistics;

use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Livewire\Component;

class StatisticalComponent extends Component
{
    public $ordersCount;
    public $productsCount;
    public $usersCount;
    public $categoriesCount;

    public function mount()
    {
        $this->ordersCount = count(Order::all());
        $this->productsCount = count(Product::all());
        $this->usersCount = count(User::all());
        $this->categoriesCount = count(Category::all());
    }
    public function render()
    {
        return view('admin.statistics.statistical-component');
    }
}
