<div class="mb-3">
    <div class="input-group">
        <input
            name="{{ $name }}"
            type="file"
            class="form-control-file @error($name) is-invalid @enderror"
            {{ $attributes }} >
    </div>
    @error($name)
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>


