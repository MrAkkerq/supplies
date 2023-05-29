@extends('layout.master')
@section('content')
<div class="container">
    <h3 class="pb-4 mb-4 fst-italic border-bottom">
        Создание поставки
    </h3>

    <form class="card card-body mb-4" method="POST" action="/supplies">
        @csrf
        <div class="form-group">
            <label class="form-label">Курс доллара, ₽</label>
            <input type="number" step="0.01" class="form-control" placeholder="Введите курс доллара в ₽" name="dollar" value="{{ old('dollar') }}">
        </div>
        <div class="form-group">
            <label class="form-label">Цена карго, $</label>
            <input type="number" step="0.1" class="form-control" placeholder="Введите цену карго в $" name="cargo" value="{{ old('cargo') }}">
        </div>
        <div class="form-group">
            <label class="form-label">Цена рынка, ₽</label>
            <input type="number" class="form-control" placeholder="Введите цену хранения на рынке в  ₽" name="market" value="{{ old('market') }}">
        </div>
        <div class="form-group">
            <label class="form-label">Цена доставки, ₽</label>
            <input type="number" class="form-control" placeholder="Введите цену доставки в ₽" name="delivery" value="{{ old('delivery') }}">
        </div>
        <div class="form-group">
            <label class="form-label">Дата поставки</label>
            <input type="date" class="form-control" placeholder="Введите дату поставки" name="date" value="{{ old('date') }}">
        </div>

        <br>

        <button type="submit" class="btn btn-primary">Создать поставку</button>
    </form>
</div>
@endsection()