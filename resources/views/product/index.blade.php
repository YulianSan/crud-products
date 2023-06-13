@extends('layout.base')

@section('title', 'Create Product')

@section('main')
    <table class="table-fixed w-full">
    <thead class="text-left">
        <tr>
            <th>Code</th>
            <th>Name</th>
            <th>Image</th>
            <th>Price</th>
        </tr>
    </thead>    
    <tbody>
            @foreach($products as $product)
            <x-tables.row-product :product="$product"></x-tables.row-product>
            @endforeach
        </tbody>
    </table>
@endsection