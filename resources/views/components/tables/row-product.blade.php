<tr class="border">
    <x-tables.cell-product :value="$product->code"></x-tables.cell-product>
    <x-tables.cell-product :value="$product->name"></x-tables.cell-product>
    <td>
        <img 
            src="{{ $product->image_url }}" 
            alt="{{ $product->name }}"
            class="object-contain w-16 aspect-square"/>
    </td>
    <x-tables.cell-product :value="$product->price"></x-tables.cell-product>

    <td class="p-4 space-x-0 sm:space-x-1 sm:space-y-0">
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