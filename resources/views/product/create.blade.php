@extends('layout.base')

@section('title', 'Create Product')

@section('main')
    {{ json_encode($errors->all())}}
    <form action="{{ route('product.store') }}" method="POST">
        @csrf
        <div>
            <label for="code">Codigo do produto</label>
            <input type="text" id="code" name="code" value="{{ @old('code') }}">
            <p>
                @error('code')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror
            </p>
        </div>
        <div>
            <label for="name">Nome</label>
            <input type="text" id="name" name="name" value="{{ @old('name') }}">
        </div>
        <div>
            <label for="image_url">Image Url:</label>
            <input type="url" id="image_url" name="image_url" value="{{ @old('image_url') }}">
        </div>
        <div>
            <label for="price">Price:</label>
            <input type="number" id="price" step="0.01" name="price" value="{{ @old('price') }}">
        </div>
        <button type="submit">Create</button>
    </form>
@endsection