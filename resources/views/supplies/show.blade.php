@extends('layout.master')
@section('content')
<div class="container">
    <h3 class="pb-4 mb-4 fst-italic border-bottom">
        Поставка от {{ $supply->date }}
    </h3>

    @if($supply->completed)
        <p>Учтено</p>
    @else
        <p>Не учтено</p>
    @endif

    <br>

    <table class="table table-striped">
        <tr>
            <th scope="col">Курс доллара</th>
            <th scope="col">Стоимость карго</th>
            <th scope="col">Стоимость хранения на рынке</th>
            <th scope="col">Стоимость доставки</th>
        </tr>
        <tr>
            <td>{{ $supply->dollar }} ₽</td>
            <td>{{ $supply->cargo }} $</td>
            <td>{{ $supply->market }} ₽</td>
            <td>{{ $supply->delivery }} ₽</td>
        </tr>
    </table>

    <hr>

    <h3>Список товаров</h3>

    @if($supply->products->isNotEmpty())
        @include('products.index', ['products' => $supply->products])
    @endif

    <hr>

    @if(!$supply->completed)
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
                    step="0.001"
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

        @if(count($supply->products) > 0)
            <form action="/supplies/{{ $supply->id }}/report" method="post">
                @csrf
                <input type="submit" name="complete" value="Учесть" />
            </form>
        @endif

        <br>

        <a href="/supplies/{{ $supply->id }}/edit" class="btn btn-light">Изменить данные о поставке</a>
    @endif

    <br>

    <a href="/supplies" class="btn btn-primary">Вернуться к списку поставок</a>

</div>
@endsection()