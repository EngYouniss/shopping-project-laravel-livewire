<div>
    <div class="container-xxl flex-grow-1 container-p-y">

        <!-- زر الإضافة في الأعلى جهة اليمين -->
        <div class="d-flex justify-content-between align-items-center mb-3">
            <input type="text" class="form-control w-25" placeholder="Search" wire:model.live="search">

            <div>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalCenter">
                    Add New
                </button>
            </div>
        </div>

        <!-- جدول اصناف المنتجات -->
        <div class="card">
            <div class="table-responsive text-nowrap">
                @if (count($messages) > 0)
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Message</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @foreach ($messages as $message)
                                <tr>
                                    <td>{{ $message->id }}</td>
                                    <td><strong>{{ $message->name }}</strong></td>
                                    <td>{{ $message->email }}</td>

                                    <td>
                                        {{ $message->message }}
                                    </td>


                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                data-bs-toggle="dropdown">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#"
                                                    wire:click.prevent="$dispatch('Edit',{id:{{ $message->id }}})">
                                                    <i class="bx bx-view-alt me-1"></i> View
                                                </a>
                                                <a class="dropdown-item" href="#"
                                                    wire:click.prevent="$dispatch('deleteProduct',{id:{{ $message->id }}})">
                                                    <i class="bx bx-trash me-1"></i> Delete
                                                </a>

                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @livewire('admin.categories.update-category-component')
                @else
                    <div class="text-danger p-3">Category Not Found.</div>
                @endif
            </div>
        </div>

        <!-- Pagination -->
        <div class="d-flex justify-content-center mt-3">
            {{ $messages->onEachSide(3)->links() }}
        </div>


    </div>
