<div class="c-input flex-49 m-flex-100">
    <div class="title d-flex align-items-center pb-10">
        <div class="text">
            <label for="{{ $attributes['id'] ?? '' }}" class="f-15 text-63">{{ $label }}</label>
        </div>
    </div>
    <input type="text" {{ $attributes }}/>
    @error("formControls.{$attributes['id']}")
    <p class="f-13 text-danger">{{ $message }}</p>
    @enderror
</div>

