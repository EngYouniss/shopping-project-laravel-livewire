<div>
    <div class="container-xxl flex-grow-1 container-p-y">

        <!-- زر الإضافة في الأعلى جهة اليمين -->
        <div class="d-flex justify-content-between align-items-center mb-3">
            <input type="text" class="form-control w-25" placeholder="Search" wire:model.live="searchOffer">

            <div>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalCenter">
                    Add New
                </button>
            </div>
        </div>

        <!-- جدول اصناف المنتجات -->
        <div class="card">
            <div class="table-responsive text-nowrap">
                @if (count($offers) > 0)
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Discount Price</th>
                                <th>Product</th>
                                <th>Start Date</th>
                                <th>End Date</th>
                                <th>Image</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @foreach ($offers as $offer)
                                <tr>
                                    <td>{{ $offer->id }}</td>
                                    <td><strong>{{ $offer->title }}</strong></td>
                                    <td>{{ $offer->description }}</td>
                                    <td>{{ $offer->discount_price }}</td>
                                    <td>{{ $offer->product->name }}</td>
                                    <td>{{ $offer->status }}</td>
                                    <td>{{ $offer->start_date }}</td>
                                    <td>{{ $offer->end_date }}</td>

                                    <td>
                                        <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                            <li class="avatar avatar-md pull-up" title="Product Image">
                                                <img src="{{ $offer->image }}" alt="Avatar" />
                                            </li>
                                        </ul>
                                    </td>


                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                data-bs-toggle="dropdown">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#"
                                                    wire:click.prevent="$dispatch('Edit',{id:{{ $offer->id }}})">
                                                    <i class="bx bx-edit-alt me-1"></i> Edit
                                                </a>
                                                <a class="dropdown-item" href="#"
                                                    wire:click.prevent="$dispatch('deleteProduct',{id:{{ $offer->id }}})">
                                                    <i class="bx bx-trash me-1"></i> Delete
                                                </a>

                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @livewire('admin.offers.edit-offers-component')
                @else
                    <div class="text-danger p-3">Offer Not Found.</div>
                @endif
            </div>
        </div>

        <!-- Pagination -->
        <div class="d-flex justify-content-center mt-3">
            {{ $offers->onEachSide(3)->links() }}
        </div>

        <livewire:admin.offers.create-offers-component />

    </div>
