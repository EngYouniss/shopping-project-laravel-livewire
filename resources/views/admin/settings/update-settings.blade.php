<div>
    <form wire:submit.prevent="submit">
        <div class="card-body row">

            @if (session()->has('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <div class="col-md-6 mb-2">
                <label class="form-label">Name</label>
                <input type="text" class="form-control" placeholder="Name" wire:model='name' />
                @error('name') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="col-md-6 mb-2">
                <label class="form-label">Logo</label>
                <input type="file" class="form-control" wire:model='logo' />
                @error('logo') <span class="text-danger">{{ $message }}</span> @enderror

                @if ($logo)
                    <img src="{{ asset('storage/' . $logo) }}" width="100" class="mt-2">
                @endif
            </div>

            <div class="col-md-6 mb-2">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" wire:model='email' />
            </div>

            <div class="col-md-6 mb-2">
                <label class="form-label">Facebook</label>
                <input type="text" class="form-control" wire:model='facebook' />
            </div>

            <div class="col-md-6 mb-2">
                <label class="form-label">Instagram</label>
                <input type="text" class="form-control" wire:model='instagram' />
            </div>

            <div class="col-md-6 mb-2">
                <label class="form-label">X (Twitter)</label>
                <input type="text" class="form-control" wire:model='x' />
            </div>

            <div class="col-md-6 mb-2">
                <label class="form-label">WhatsApp</label>
                <input type="text" class="form-control" wire:model='whatsapp' />
            </div>

            <div class="col-md-6 mb-2">
                <label class="form-label">Phone Number</label>
                <input type="text" class="form-control" wire:model='phone_number' />
            </div>

            <div class="col-md-6 mb-2">
                <label class="form-label">Fax</label>
                <input type="text" class="form-control" wire:model='fax' />
            </div>
        </div>

        <div class="card-footer text-end">
            <button type="submit" class="btn btn-primary">💾 حفظ الإعدادات</button>
        </div>
    </form>
</div>
