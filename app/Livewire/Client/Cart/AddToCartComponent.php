namespace App\Livewire\Client\Cart;

use App\Models\Product;
use Livewire\Attributes\On;
use Livewire\Component;

class AddToCartComponent extends Component
{
    public $product;

    public function mount($product)
    {
        $this->product = $product;
    }

    public function add()
    {
        $cart = session()->get('cart', []);

        $id = $this->product->id;

        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                'name' => $this->product->name,
                'price' => $this->product->price,
                'image' => $this->product->image,
                'quantity' => 1,
            ];
        }

        session()->put('cart', $cart);

        $this->dispatch('cart-updated'); // تحديث السلة
        $this->dispatch('notify', 'تمت إضافة المنتج إلى السلة');
    }

    public function render()
    {
        return view('client.cart.add-to-cart-component');
    }
}
