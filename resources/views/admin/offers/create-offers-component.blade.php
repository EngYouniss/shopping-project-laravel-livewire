<x-create-modal title="Add New Offer">
    <div class="row">

        {{-- Offer Title + Discount Price --}}
        <div class="col-md-6 mb-3">
            <label class="form-label fw-semibold">Offer Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror"
                placeholder="Enter product name" wire:model="title">
            @error('title')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-md-6 mb-3">
            <label class="form-label fw-semibold">Discount Price</label>
            <input type="text" class="form-control @error('discount_price') is-invalid @enderror"
                placeholder="Enter price" wire:model="discount_price">
            @error('discount_price')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        {{-- Product --}}
        <div class="col-md-6 mb-3">
            <label class="form-label fw-semibold">Product</label>
            <select class="form-select @error('product_id') is-invalid @enderror" wire:model="product_id">
                <option value="">-- Select Product --</option>
                @foreach ($products as $product)
                    <option value="{{ $product->id }}">{{ $product->name }}</option>
                @endforeach
            </select>
            @error('product_id')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        {{-- Product Image --}}
        <div class="col-md-6 mb-3">
            <label class="form-label fw-semibold">Product Image</label>
            <input type="file" class="form-control @error('image') is-invalid @enderror" wire:model="image"
                accept="image/*">
            @error('image')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror

            @if ($image)
                <img src="{{ $image->temporaryUrl() }}" class="img-thumbnail mt-2" width="100">
            @endif
        </div>
        <div class="col-md-6 mb-3">
            <label class="form-label fw-semibold">Status</label>
            <select class="form-select @error('status') is-invalid @enderror" wire:model="status">
                <option value="active">Active</option>
                <option value="inactive">Inactive</option>
            </select>
            @error('status')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        {{-- Start Date + End Date --}}
        <div class="col-md-6 mb-3">
            <label class="form-label fw-semibold">Start Date</label>
            <input type="text" class="form-control @error('start_date') is-invalid @enderror"
                placeholder="YYYY-MM-DD" wire:model="start_date">
            @error('start_date')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-md-6 mb-3">
            <label class="form-label fw-semibold">End Date</label>
            <input type="text" class="form-control @error('end_date') is-invalid @enderror" placeholder="YYYY-MM-DD"
                wire:model="end_date">
            @error('end_date')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        {{-- Description --}}
        <div class="col-md-12 mb-3">
            <label class="form-label fw-semibold">Description</label>
            <textarea class="form-control @error('description') is-invalid @enderror" rows="4"
                placeholder="Write a brief description" wire:model="description"></textarea>
            @error('description')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

    </div>
</x-create-modal>
