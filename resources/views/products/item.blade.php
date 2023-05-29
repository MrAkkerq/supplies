<li class="list-group-item">
    {{ $product->name }}
    {{ $product->price * $product->yuan }} ₽
    {{ $product->quantity }} шт.

    @if(!$product->supply->completed)
        <a href="/supplies/{{ $product->supply->id }}/products/{{ $product->id }}/edit" class="btn btn-light">Изменить</a>
    @endif()
</li>