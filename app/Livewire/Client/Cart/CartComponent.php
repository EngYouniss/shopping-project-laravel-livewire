<?php

namespace App\Livewire\Client\Cart;

use Livewire\Component;

class CartComponent extends Component
{
    public $cartItems = [];

protected $listeners = ['productAddedToCart' => 'addToCart'];

    public function mount()
    {
        // جلب محتويات السلة من الجلسة لو موجودة
        $this->cartItems = session('cart', []);
    }

public function addToCart(array $product)
{
    if (!isset($product['id'])) {
        return; // بيانات غير صحيحة
    }

    // تحقق هل المنتج موجود في السلة
    $foundIndex = null;
    foreach ($this->cartItems as $index => $item) {
        foreach ($this->cartItems as $index => $item) {
    if (is_array($item) && isset($item['id']) && $item['id'] == $product['id']) {
        $foundIndex = $index;
        break;
    }
}
    }

    if ($foundIndex !== null) {
        $this->cartItems[$foundIndex]['quantity']++;
    } else {
        $product['quantity'] = 1;
        $this->cartItems[] = $product;
    }

    $this->saveCart();
}





    public function updateQuantity($index, $quantity)
    {
        if ($quantity < 1) {
            $quantity = 1;
        }
        $this->cartItems[$index]['quantity'] = $quantity;
        $this->saveCart();
    }

    public function removeItem($index)
    {
        unset($this->cartItems[$index]);
        $this->cartItems = array_values($this->cartItems);
        $this->saveCart();
    }

    public function getTotalProperty()
    {
        return collect($this->cartItems)->sum(function ($item) {
            return $item['price'] * $item['quantity'];
        });
    }

    private function saveCart()
    {
        session(['cart' => $this->cartItems]);
    }

    public function render()
    {
        return view('client.cart.cart-component', [
            'cartItems' => $this->cartItems,
            'total' => $this->total,
        ]);
    }
}
