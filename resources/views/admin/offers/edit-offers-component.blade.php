<x-edit-modal title="Update Offer">

    {{-- الصف الأول: Offer Title + Discount Price --}}
    <div class="row">
        <div class="col-md-6 mb-3">
            <label for="productName" class="form-label">Offer Title</label>
            <input type="text" id="productName"
                   class="form-control @error('title') is-invalid @enderror"
                   placeholder="Product Name" wire:model="title" />
            @error('title')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-md-6 mb-3">
            <label for="productName" class="form-label">Discount Price</label>
            <input type="text" id="productName"
                   class="form-control @error('discount_price') is-invalid @enderror"
                   placeholder="Product Name" wire:model="discount_price" />
            @error('discount_price')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>

    {{-- الصف الثاني: Discription + Product --}}
    <div class="row">
        <div class="col-md-6 mb-3">
            <label for="productName" class="form-label">Discription</label>
            <input type="text" id="productName"
                   class="form-control @error('dicription') is-invalid @enderror"
                   placeholder="Product Name" wire:model="discount_price" />
            @error('dicription')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-md-6 mb-3">
            <label for="category" class="form-label">Product</label>
            <select id="category"
                    class="form-select @error('product_id') is-invalid @enderror"
                    wire:model="product_id">
                <option value="">-- Select Product --</option>
                @foreach ($products as $product)
                    <option value="{{ $product->id }}">{{ $product->name }}</option>
                @endforeach
            </select>
            @error('product_id')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>

    {{-- الصف الثالث: Start Date + End Date --}}
    <div class="row">
        <div class="col-md-6 mb-3">
            <label for="productName" class="form-label">ٍStart Date</label>
            <input type="text" id="productName"
                   class="form-control @error('start_date') is-invalid @enderror"
                   placeholder="Product Name" wire:model="start_date" />
            @error('start_date')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-md-6 mb-3">
            <label for="productName" class="form-label">End Date</label>
            <input type="text" id="productName"
                   class="form-control @error('end_date') is-invalid @enderror"
                   placeholder="Product Name" wire:model="end_date" />
            @error('end_date')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
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
    {{-- الصف الرابع: Image --}}
    <div class="row">
        <div class="col-md-12 mb-3">
            <label for="image" class="form-label">Product Image</label>
            <input type="file" id="image"
                   class="form-control @error('image') is-invalid @enderror"
                   wire:model="image">
            @error('image')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>

    {{-- الصف الخامس: Description --}}
    <div class="row">
        <div class="col-md-12 mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea id="description"
                      class="form-control @error('description') is-invalid @enderror"
                      placeholder="Product Description"
                      rows="3"
                      wire:model="description"></textarea>
            @error('description')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>

</x-edit-modal>
