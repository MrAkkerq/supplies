<div class="col-md-8">
    <h3 class="pb-4 mb-4 fst-italic border-bottom">
        Поставка от {{ $supply->date }}
    </h3>

    @if($supply->completed)
        Учтено
    @else
        Не учтено
    @endif

    <br>

    <p>Курс доллара = {{ $supply->dollar }} ₽</p>
    <p>Стоимость карго = {{ $supply->cargo }} $</p>
    <p>Стоимость хранения на рынке = {{ $supply->market }} ₽</p>
    <p>Стоимость доставки = {{ $supply->delivery }} ₽</p>

    <hr>

    <h3>Список товаров</h3>

    @if($supply->products->isNotEmpty())
        <ul class="list-group">
            @foreach($supply->products as $product)
                <li class="list-group-item">
                    {{ $product->name }}
                </li>
            @endforeach
        </ul>
    @endif

    <hr>

    <form class="card card-body mb-4" method="POST" action="/supplies/{{ $supply->id }}/products">
        @csrf
        <div class="form-group">
            <input
                type="text" class="form-control"
                placeholder="Название товара"
                value="{{ old('name') }}"
                name="name"
            >
            <input
                type="number" class="form-control"
                placeholder="Yuan rate"
                step="0.1"
                value="{{ old('yuan') }}"
                name="yuan"
            >
            <input
                type="number" class="form-control"
                placeholder="Price"
                value="{{ old('price') }}"
                name="price"
            >
            <input
                type="number" class="form-control"
                placeholder="Quantity"
                value="{{ old('quantity') }}"
                name="quantity"
            >
        </div>
        <button type="submit" class="btn btn-primary">Добавить</button>
    </form>

    <hr>

    <form action="/supplies/{{ $supply->id }}/report" method="post">
        @csrf
        <input type="submit" name="complete" value="Учесть" />
    </form>

    <br>

    <a href="/supplies/{{ $supply->id }}/edit" class="btn btn-light">Изменить данные о поставке</a>

    <br>

    <a href="/supplies" class="btn btn-primary">Вернуться к списку поставок</a>

</div>
