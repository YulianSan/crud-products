<tr>
    <td>{{ $product->code }}</td>
    <td>{{ $product->name }}</td>
    <td>
        <img src="{{ $product->image_url }}" alt="{{ $product->name }}" width="100" height="100"/>
    </td>
    <td>{{ $product->price }}</td>
</tr>