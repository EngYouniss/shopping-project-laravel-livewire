<div>
    <div class="dropdown position-relative">
        <button class="btn text-white fs-5 position-relative p-0 border-0 bg-transparent" type="button"
            data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fas fa-shopping-cart fa-lg"></i>
            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                {{ count($cartItems) }}
            </span>
        </button>

        <div class="dropdown-menu dropdown-menu-end p-3 shadow cart-dropdown"
            style="min-width: 350px; max-height: 400px; overflow-y: auto;">

            @forelse($cartItems as $index => $item)
                <div class="cart-item d-flex mb-3 align-items-center">
                    <img src="{{ $item['image'] }}" class="me-2 rounded" alt="Product" width="60">
                    <div class="flex-grow-1">
                        <div class="fw-bold">{{ $item['name'] }}</div>
                        <small class="text-muted">YER{{ number_format($item['price'], 2) }}</small>
                        <div class="mt-1 d-flex gap-2 align-items-center">
                            <input type="number" min="1"
                                wire:change="updateQuantity({{ $index }}, $event.target.value)"
                                value="{{ $item['quantity'] }}" class="form-control form-control-sm"
                                style="width: 60px;" ">
                    </div>
                </div>
                <button wire:click="removeItem({{ $index }})"
                        class="btn btn-sm btn-danger ms-2">&times;</button>
                        </div>
                    @empty
                        <div class="text-center text-muted">Your cart is empty</div>
            @endforelse

            @if (count($cartItems) > 0)
                <hr>
                <div class="d-flex justify-content-between mb-2">
                    <strong>Total:</strong>
                    <span>YER{{ number_format($total, 2) }}</span>
                </div>
                <a href="#" class="btn btn-primary w-100" >View Full Cart</a>
            @endif
        </div>
    </div>

</div>
