<div >
    <div class="modal fade" id="editModalCenter" tabindex="-1" aria-hidden="true" wire:ignore.self>
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalCenterTitle">Edit Product</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <form wire:submit.prevent="updateProduct" enctype="multipart/form-data" wire:key="create-product-form">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <label for="productName" class="form-label">Product Name</label>
                                <input type="text" id="productName" class="form-control @error('name') is-invalid @enderror" placeholder="Product Name" wire:model="name" />
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-4 mb-3">
                                <label for="price" class="form-label">Price</label>
                                <input type="text" id="price" class="form-control @error('price') is-invalid @enderror" placeholder="Price" wire:model="price" />
                                @error('price')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-4 mb-3">
                                <label for="category" class="form-label">Category</label>
                                <select id="category" class="form-select @error('category_id') is-invalid @enderror" wire:model="category_id">
                                    <option value="">-- Select Category --</option>
                                    @foreach ($categories as $cat)
                                        <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            {{-- <div class="col-md-4 mb-3">
                                <label for="stock" class="form-label">Stock</label>
                                <input type="text" id="stock" class="form-control @error('stock') is-invalid @enderror" placeholder="Stock Quantity" wire:model="stock" />
                                @error('stock')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div> --}}

                            <div class="col-md-4 mb-3">
                                <label for="image" class="form-label">Product Image</label>
                                <input type="file" id="image" class="form-control @error('image') is-invalid @enderror" wire:model="image" accept="image/*" />
                                @error('image')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror

                                @if ($currentImage)
                                    <img src="{{ $currentImage }}" class="img-thumbnail mt-2" width="100" />
                                @endif
                            </div>

                            {{-- <div class="col-md-4 mb-3">
                                <label for="status" class="form-label">Status</label>
                                <select id="status" class="form-select @error('status') is-invalid @enderror" wire:model="status">
                                    <option value="active">Active</option>
                                    <option value="inactive">Inactive</option>
                                </select>
                                @error('status')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div> --}}
                        </div>

                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea id="description" class="form-control @error('description') is-invalid @enderror" placeholder="Product Description" rows="3" wire:model="description"></textarea>
                                @error('description')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                            Close
                           <button type="submit" class="btn btn-primary" wire:loading.attr="disabled">Save Product

                            <div class="spinner-border spinner-border-sm text-light" role="status" wire:loading
                                wire:target="updateProduct">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>



</div>
