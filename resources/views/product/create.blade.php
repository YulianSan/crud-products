@extends('layout.base')

@section('title', 'Create Product')

@section('main')
    <form action="{{ route('product.store') }}" method="POST" class="max-w-xl border mx-auto p-4">
        @csrf
        <x-forms.input type="text" name="code" label="Identification code"></x-forms.input>
        <x-forms.input type="text" name="name" label="Name"></x-forms.input>
        <x-forms.input type="url" name="image_url" label="Image Url"></x-forms.input>
        <x-forms.input type="number" name="price" label="Price"></x-forms.input>
        <button type="submit" class="w-full bg-blue-950 text-white mt-8 py-3 rounded-md">Create</button>
    </form>
@endsection