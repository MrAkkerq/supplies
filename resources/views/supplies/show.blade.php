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

    @if($supply->products->isNotEmpty())
        <h3>Список товаров</h3>
        @include('products.index', ['products' => $supply->products])
    @else
        <h3>Нет товаров в поставке</h3>
    @endif

    <hr>

    @if(!$supply->completed)
        @include('products.create')

        <hr>

        @if(count($supply->products) > 0)
            <form action="/supplies/{{ $supply->id }}/report" method="post">
                @csrf
                <input type="submit" class="btn btn-light" name="complete" value="Учесть" />
            </form>
        @endif

        <br>

        <a href="/supplies/{{ $supply->id }}/edit" class="btn btn-light">Изменить данные о поставке</a>
    @endif

    <br>

    @if($supply->completed)
        <form method="POST" action="/supplies/{{ $supply->id }}">
        @csrf
        @method('DELETE')
            <button type="submit" class="btn btn-danger">Удалить</button>
        </form>
    @endif()

    <a href="/supplies" class="btn btn-primary">Вернуться к списку поставок</a>

</div>
@endsection()