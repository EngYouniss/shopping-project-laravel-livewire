<x-create-modal title="Add New Product">
    <div class="row">
        <!-- Product Name -->
        <div class="col-md-4 mb-3">
            <label for="productName" class="form-label fw-semibold">Product Name</label>
            <input type="text" id="productName"
                   class="form-control @error('name') is-invalid @enderror"
                   placeholder="Enter product name"
                   wire:model.defer="name">
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Price -->
        <div class="col-md-4 mb-3">
            <label for="price" class="form-label fw-semibold">Price</label>
            <input type="text" id="price"
                   class="form-control @error('price') is-invalid @enderror"
                   placeholder="Enter price"
                   wire:model.defer="price">
            @error('price')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Category -->
        <div class="col-md-4 mb-3">
            <label for="category" class="form-label fw-semibold">Category</label>
            <select id="category"
                    class="form-select @error('category_id') is-invalid @enderror"
                    wire:model.defer="category_id">
                <option value="">-- Select Category --</option>
                @foreach ($categories as $cat)
                    <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                @endforeach
            </select>
            @error('category_id')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Product Image -->
        <div class="col-md-4 mb-3">
            <label for="image" class="form-label fw-semibold">Product Image</label>
            <input type="file" id="image"
                   class="form-control @error('image') is-invalid @enderror"
                   wire:model="image" accept="image/*">
            @error('image')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror

            @if ($image)
                <img src="{{ $image->temporaryUrl() }}" class="img-thumbnail mt-2" width="100">
            @endif
        </div>

        <!-- Description -->
        <div class="col-md-8 mb-3">
            <label for="description" class="form-label fw-semibold">Description</label>
            <textarea id="description"
                      class="form-control @error('description') is-invalid @enderror"
                      rows="4"
                      placeholder="Write a brief description"
                      wire:model.defer="description"></textarea>
            @error('description')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>
</x-create-modal>
