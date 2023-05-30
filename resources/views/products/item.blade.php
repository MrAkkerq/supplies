<li class="list-group-item">
    {{ $product->name }}
    {{ $product->pivot->price * $product->pivot->yuan }} ₽
    {{ $product->pivot->quantity }} шт.

{{--    @if(!$product->supply->completed)--}}
{{--        <a href="/supplies/{{ $product->supply->id }}/products/{{ $product->id }}/edit" class="btn btn-light">Изменить</a>--}}
{{--    @endif()--}}
</li>
