<x-create-modal title="Add New Category">
                        <div class="row">
                            <!-- Category Name -->
                            <div class="col-md-12 mb-3">
                                <label for="categoryName" class="form-label">Category Name</label>
                                <input type="text" id="categoryName"
                                    class="form-control @error('name') is-invalid @enderror"
                                    placeholder="Enter category name" wire:model="name" />
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                                <div class="col-md-12 mb-3">
                                    <label for="image" class="form-label">Category Image</label>
                                    <input type="file" id="image" class="form-control @error('image') is-invalid @enderror"
                                        wire:model="image">
                                    @error('image')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                        </div>

                        <!-- Optional: Category Description -->
                        <div class="row">
                            <div class="col-12 mb-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea id="description" rows="3"
                                    class="form-control @error('description') is-invalid @enderror"
                                    placeholder="Enter category description" wire:model="description"></textarea>
                                @error('description')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

</x-create-modal>
