<x-edit-modal title="Update Category">
        <div class="mb-3">
            <label for="productName" class="form-label">Product Name</label>
            <input type="text" id="productName" class="form-control @error('name') is-invalid @enderror"
                placeholder="Product Name" wire:model="name" />
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea id="description" class="form-control @error('description') is-invalid @enderror"
                placeholder="Product Description" rows="3" wire:model="description"></textarea>
            @error('description')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

</x-edit-modal>
