<div>
    <div class="container-xxl flex-grow-1 container-p-y">

        <!-- البحث -->
        <div class="d-flex justify-content-between align-items-center mb-3">
            <input type="text" class="form-control w-25" placeholder="Search" wire:model.live="searchOrder">
        </div>

        <!-- جدول الطلبات -->
        <div class="card">
            <div class="table-responsive text-nowrap">
                @if (count($orders) > 0)
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Customer</th>
                                <th>Total</th>
                                <th>Status</th>
                                <th>Created At</th>
                                <th>Products</th> {{-- عمود جديد --}}
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @foreach ($orders as $order)
                                <tr>
                                    <td>{{ $order->id }}</td>
                                    <td>{{ $order->user->name ?? 'N/A' }}</td>
                                    <td>${{ number_format($order->total, 2) }}</td>
                                    <td>
                                        <span class="badge bg-label-{{ $order->status == 'completed' ? 'success' : 'warning' }}">
                                            {{ ucfirst($order->status) }}
                                        </span>
                                    </td>
                                    <td>{{ $order->created_at->format('Y-m-d') }}</td>
                                    <td>
                                        <ul class="list-unstyled mb-0">
                                            @foreach ($order->orderDetails as $detail)
                                                <li>
                                                    {{ $detail->product->name ?? 'N/A' }}
                                                    (Qty: {{ $detail->quantity }})
                                                </li>
                                            @endforeach
                                        </ul>
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#" wire:click.prevent="$dispatch('viewOrderDetails', {id: {{ $order->id }}})">
                                                    <i class="bx bx-show me-1"></i> View
                                                </a>
                                                <a class="dropdown-item" href="#" wire:click.prevent="$dispatch('deleteOrder', {id: {{ $order->id }}})">
                                                    <i class="bx bx-trash me-1"></i> Delete
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @else
                    <div class="text-danger p-3">No orders found.</div>
                @endif
            </div>
        </div>

        <!-- Pagination -->
        <div class="d-flex justify-content-center mt-3">
            {{ $orders->links() }}
        </div>

    </div>
</div>
