<article class="blog-post">
    <h2 class="blog-post-title mb-1">
        <a href="/supplies/{{ $supply->id }}">
            Поставка от {{ $supply->date }}
        </a>
        @if($supply->completed)
            Учтено
        @else
            Не учтено
        @endif
    </h2>

</article>

