@extends('layout.base')

@section('title', 'Products')

@push('scripts')
    @vite('resources/js/model.js')
@endpush

@section('main')
    @if(session('message'))
        <x-global.message :message="session('message')"></x-global.message>
    @endif
    <section class="max-w-5xl mx-auto">
        <header class="flex justify-between mb-10 items-center flex-col sm:flex-row">
            <h1 class="text-5xl font-bold">Products</h1>
            <a 
                href="{{ route('product.create') }}"
                class="bg-green-500 text-white 
                    relative px-4 py-3 rounded-md font-bold">
                <i class="fa-solid fa-plus mx-2"></i>
                Add Products
            </a>
        </header>
        <table class="table-fixed w-full" border="2">
            <thead class="text-left">
                <tr class="border">
                    <th class="p-4">Code</th>
                    <th class="p-4">Name</th>
                    <th class="p-4">Image</th>
                    <th class="p-4">Price</th>
                    <th class="p-4">Actions</th>
                </tr>
            </thead>    
            <tbody>
                @forelse($products as $product)
                    <x-tables.row-product :product="$product"></x-tables.row-product>
                @empty
                    <tr>
                        <td colspan="5" class="text-center p-3">
                            <span class="text-xl font-light">
                                No product found
                            </span>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </section>
@endsection