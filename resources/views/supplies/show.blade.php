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
        <form class="card card-body mb-4" method="POST" action="/supplies/{{ $supply->id }}/products">
            @csrf
            <div class="form-group">
                <select class="form-select" name="name">
                  <option value="Zozu кушон">Zozu кушон</option>
                  <option value="Zozu патчи">Zozu патчи</option>
                  <option value="Jomtam основа">Jomtam основа</option>
                  <option value="Jomtam патчи">Jomtam патчи</option>
                  <option value="O'CHEAL face">O'CHEAL face</option>
                  <option value="Yangmei консилер">Yangmei консилер</option>
                </select>
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