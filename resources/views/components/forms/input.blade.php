<div>
    <label for="{{ $name }}" class="block">{{ $label }}</label>
    <input 
        type="{{ $type }}" 
        id="{{ $name }}" 
        name="{{ $name }}" 
        value="{{ @old($name) ?? $value }}" 
        class="border bg-stone-100 w-full px-2 py-2 rounded-md"
        required
        @if($type == 'number') 
            step="0.01"
            min="0"
        @endif />
        
        @error($name)
            <p class="text-red-500">
                {{ $message }}
            </p>
        @enderror
</div>