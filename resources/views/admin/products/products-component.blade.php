<div>
    <div class="container-xxl flex-grow-1 container-p-y">

        <!-- زر الإضافة في الأعلى جهة اليمين -->
        <div class="d-flex justify-content-between align-items-center mb-3">
            <input type="text" class="form-control w-25" placeholder="Search" wire:model.live="searchProduct">

            <div>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalCenter">
                    Add New
                </button>
                <livewire:admin.products.create-product />
            </div>
        </div>

        <!-- جدول المنتجات -->
        <div class="card">
            <div class="table-responsive text-nowrap">
                @if (count($products) > 0)
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Price</th>
                                <th>Category</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @foreach ($products as $product)
                                <tr>
                                    <td>{{ $product->id }}</td>
                                    <td><strong>{{ $product->name }}</strong></td>
                                    <td>{{ $product->description }}</td>
                                    <td>{{ $product->price }}</td>
                                    <td>{{ $product->category->name?? 'No Category' }}</td>
                                    <td>
                                        <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                            <li class="avatar avatar-md pull-up" title="Product Image">
                                                <img src="{{  $product->image }}" alt="Avatar" />
                                            </li>
                                        </ul>
                                    </td>
                                    <td><span class="badge bg-label-primary me-1">Active</span></td>
                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                data-bs-toggle="dropdown">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#"
                                                    wire:click.prevent="$dispatch('Edit',{id:{{ $product->id }}})">
                                                    <i class="bx bx-edit-alt me-1"></i> Edit
                                                </a>
                                                <a class="dropdown-item" href="#" wire:click.prevent="$dispatch('deleteProduct',{id:{{$product->id}}})">
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
                    <div class="text-danger p-3">Product Not Found.</div>
                @endif
            </div>
        </div>

        <!-- Pagination -->
        <div class="d-flex justify-content-center mt-3">
            {{ $products->links() }}
        </div>

    </div>

</div>
