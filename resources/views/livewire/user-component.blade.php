<div>
<form wire:submit.prevent="store" >
    <label for="">name:</label>
    <input type="text" wire:model="userform.name">
    @error('userform.name')
    <span class="text-danger">{{ $message }}</span>

    @enderror
    <br>
    <label for="">email</label>
    <input type="email"  wire:model.live="userform.email" >
    @error('userform.email')
    <span class="text-danger">{{ $message }}</span>
    @enderror
    <br>
    <label for="">password</label>
    <input type="password"  wire:model.live="userform.password">
    @error('userform.password')
    <span class="text-danger">{{ $message }}</span>
    @enderror
    <br>
    <label for="">image</label>
    <input type="file" wire:model.live="userform.image">
    <div wire:loading wire:target="userform.image">Uploading...</div>

    @error('userform.image')
    <span class="text-danger">{{ $message }}</span>
    @enderror
    <div style="width: 200px;">
        @if ($userform->image)
            <img  src="{{ $userform->image->temporaryUrl() }}" alt="Image Preview" style="width: 100%; height: auto;">
        @endif
    </div>
    <br>
    <input type="submit" name="" id="">
</form>

</div>
