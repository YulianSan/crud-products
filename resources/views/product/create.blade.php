@extends('layout.base')

@section('title', 'Create Product')

@section('main')
    <form action="{{ route('product.store') }}" method="POST">
        @csrf
        <x-forms.input name="code" label="Codigo do produto"></x-forms.input>
        <x-forms.input name="name" label="Nome"></x-forms.input>
        <x-forms.input name="image_url" label="Image Url"></x-forms.input>
        <x-forms.input name="price" label="Price"></x-forms.input>
        <button type="submit">Create</button>
    </form>
@endsection