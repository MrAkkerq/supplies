@extends('layout.master')
@section('content')
<div class="container">
        <h3 class="pb-4 mb-4 fst-italic border-bottom">
            Редактирование товара
        </h3>

        <form method="POST" action="/products/{{ $product->id }}">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label class="form-label">Наименование товара</label>
                <select class="form-select" name="name">
                  <option value="Zozu кушон">Zozu кушон</option>
                  <option value="Zozu патчи">Zozu патчи</option>
                  <option value="Jomtam основа">Jomtam основа</option>
                  <option value="Jomtam патчи">Jomtam патчи</option>
                  <option value="O'CHEAL face">O'CHEAL face</option>
                  <option value="Yangmei консилер">Yangmei консилер</option>
                </select>
                <label class="form-label">Курс юаня</label>
                <input
                    type="number" class="form-control"
                    placeholder="Введите курс юаня в ₽"
                    step="0.001"
                    value="{{ old('yuan', $product->yuan) }}"
                    name="yuan"
                >
                <label class="form-label">Цена</label>
                <input
                    type="number" class="form-control"
                    placeholder="Введите цену в ¥"
                    value="{{ old('price', $product->price) }}"
                    name="price"
                >
                <label class="form-label">Количество</label>
                <input
                    type="number" class="form-control"
                    placeholder="Введите количество"
                    value="{{ old('quantity', $product->quantity) }}"
                    name="quantity"
                >
            </div>
            
            <br>

            <button type="submit" class="btn btn-primary">Изменить</button>
        </form>
 </div>
@endsection()