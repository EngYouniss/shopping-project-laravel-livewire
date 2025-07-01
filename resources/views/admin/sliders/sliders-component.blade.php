<div>
    <div class="container-xxl flex-grow-1 container-p-y">

        <!-- زر الإضافة في الأعلى جهة اليمين -->
        <div class="d-flex justify-content-between align-items-center mb-3">
            <input type="text" class="form-control w-25" placeholder="Search" wire:model.live="search">

            <div>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalCenter">
                    Add New
                </button>
                <livewire:admin.sliders.create-slider-component />
            </div>
        </div>

        <!-- جدول المنتجات -->
        <div class="card">
            <div class="table-responsive text-nowrap">
                @if (count($sliders) > 0)
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Button Text</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @foreach ($sliders as $slider)
                                <tr>
                                    <td>{{ $slider->id }}</td>
                                    <td><strong>{{ $slider->title }}</strong></td>
                                    <td>{{ $slider->description }}</td>
                                    <td>{{ $slider->button_text }}</td>

                                    <td>
                                        <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                            <li class="avatar avatar-md pull-up" title="Product Image">
                                                <img src="{{  $slider->image }}" alt="Avatar" />
                                            </li>
                                        </ul>
                                    </td>
                                    <td><span class="badge bg-label-primary me-1">{{$slider->status}}</span></td>
                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                data-bs-toggle="dropdown">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#"
                                                    wire:click.prevent="$dispatch('editSlider',{id:{{ $slider->id }}})">
                                                    <i class="bx bx-edit-alt me-1"></i> Edit
                                                </a>
                                                <a class="dropdown-item" href="#" wire:click.prevent="$dispatch('deleteProduct',{id:{{$slider->id}}})">
                                                    <i class="bx bx-trash me-1"></i> Delete
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <livewire:admin.sliders.edit-slider-component />
                @else
                    <div class="text-danger p-3">Product Not Found.</div>
                @endif
            </div>
        </div>

        <!-- Pagination -->
        <div class="d-flex justify-content-center mt-3">
            {{ $sliders->links() }}
        </div>

    </div>

</div>
