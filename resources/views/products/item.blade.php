<li class="list-group-item">
    {{ $product->name }}
    {{ $product->quantity }} шт.
    @if(!$product->supply->completed)
    <form method="POST" action="/products/{{ $product->id }}">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Удалить</button>
    </form>
    <a href="/products/{{ $product->id }}/edit" class="btn btn-light">Изменить</a>
    @endif()
</li>