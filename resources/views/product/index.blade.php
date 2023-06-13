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
            <tr>
                <td>{{ $product->code }}</td>
                <td>{{ $product->name }}</td>
                <td>
                    <img src="{{ $product->image_url }}" alt="{{ $product->name }}" width="100" height="100"/>
                </td>
                <td>{{ $product->price }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection