<tr class="border">
    <td class="p-4">{{ $product->code }}</td>
    <td class="p-4">{{ $product->name }}</td>
    <td>
        <img 
            src="{{ $product->image_url }}" 
            alt="{{ $product->name }}"
            class="object-cover w-16 aspect-square"/>
    </td>
    <td class="p-4">{{ $product->price }}</td>
    <td class="p-4 space-x-1">
        <a href="{{ route('product.destroy', $product) }}" class="delete" data-token="{{ csrf_token() }}">
            <i class="
                fa-solid fa-trash 
                p-3 bg-red-500 text-white rounded-md">
            </i>
        </a>
        <a href="{{ route('product.edit', $product) }}">
            <i class="
                fa-solid fa-pen-to-square 
                p-3 bg-blue-500 text-white rounded-md">
            </i>
        </a>
    </td>
</tr>