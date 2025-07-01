<x-edit-modal title="Update Product">
    <div class="row">
        <div class="col-md-4 mb-3">
            <label for="productName" class="form-label">Product Name</label>
            <input type="text" id="productName" class="form-control @error('name') is-invalid @enderror"
                placeholder="Product Name" wire:model="name" />
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-md-4 mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="text" id="price" class="form-control @error('price') is-invalid @enderror"
                placeholder="Price" wire:model="price" />
            @error('price')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-md-4 mb-3">
            <label for="category" class="form-label">Category</label>
            <select id="category" class="form-select @error('category_id') is-invalid @enderror"
                wire:model="category_id">
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

       <div class="row">
    <!-- رفع صورة جديدة -->
    <div class="col-md-6 mb-3">
        <label for="image" class="form-label">Product Image</label>
        <input type="file" id="image" class="form-control @error('image') is-invalid @enderror"
            wire:model="image" accept="image/*" />
        @error('image')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <!-- عرض الصورة الحالية -->
    <div class="col-md-6 mb-3 d-flex align-items-center justify-content-center">
        @if ($image)
            <img src="{{ $image->temporaryUrl() }}" class="img-thumbnail" width="150" />
        @elseif ($currentImage)
            <img src="{{ $currentImage }}" class="img-thumbnail" width="150" />
        @endif
    </div>
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
            <textarea id="description" class="form-control @error('description') is-invalid @enderror"
                placeholder="Product Description" rows="3" wire:model="description"></textarea>
            @error('description')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>


</x-edit-modal>
