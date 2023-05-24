<li class="list-group-item">
    {{ $product->name }}
    {{ $product->quantity }} шт.
    <form method="POST" action="/products/{{ $product->id }}">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Удалить</button>
    </form>
</li>