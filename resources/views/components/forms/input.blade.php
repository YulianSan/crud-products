<div>
    <label for="{{ $name }}">{{ $label }}</label>
    <input type="text" id="{{ $name }}" name="{{ $name }}" value="{{ @old($name) }}">
    <p>
        @error($name)
            <div class="text-red-500">{{ $message }}</div>
        @enderror
    </p>
</div>