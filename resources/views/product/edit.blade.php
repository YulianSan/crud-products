@extends('layout.base')

@section('title', 'Update ' . $product->name)

@section('main')
    <form action="{{ route('product.update', $product) }}" method="POST" class="max-w-xl border mx-auto p-4">
        @csrf
        @method('PUT')
        <x-forms.input 
            type="text" 
            name="name" 
            label="Nome">
        </x-forms.input>
        
        <x-forms.input 
            type="url" 
            name="image_url" 
            label="Image Url">
        </x-forms.input>

        <x-forms.input 
            type="number" 
            name="price" 
            label="Price">
        </x-forms.input>

        <button type="submit" class="w-full bg-blue-950 text-white mt-8 py-3 rounded-md">Update</button>
    </form>
@endsection