<x-edit-modal title="Edit Slider">
    <div class="row">
        <!-- Product Name -->
        <div class="col-md-4 mb-3">
            <label for="productName" class="form-label fw-semibold">Slider Title</label>
            <input type="text" id="productName" class="form-control @error('title') is-invalid @enderror"
                placeholder="Enter Slider Title" wire:model="title">
            @error('title')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Price -->
        <div class="col-md-4 mb-3">
            <label for="price" class="form-label fw-semibold">Button Text</label>
            <input type="text" id="price" class="form-control @error('price') is-invalid @enderror"
                placeholder="Enter price" wire:model="button_text">
            @error('button_text')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Category -->
        <div class="col-md-4 mb-3">
            <label for="category" class="form-label fw-semibold">status</label>
            <select id="category" class="form-select @error('status') is-invalid @enderror"
                wire:model="status">
                <option value="">-- Select status --</option>
                <option value="Active">Active</option>
                <option value="Inactive">Inactive</option>
            </select>
            @error('status')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Product Image -->
        <div class="col-md-4 mb-3">
            <label for="image" class="form-label fw-semibold">Product Image</label>
            <input type="file" id="image" class="form-control @error('image') is-invalid @enderror"
                wire:model="image" accept="image/*">
            @error('image')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Description -->
        <div class="col-md-8 mb-3">
            <label for="description" class="form-label fw-semibold">Description</label>
            <textarea id="description" class="form-control @error('description') is-invalid @enderror" rows="4"
                placeholder="Write a brief description" wire:model="description"></textarea>
            @error('description')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>


</x-edit-modal>
