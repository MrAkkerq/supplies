<div class="col-md-8">
        <h3 class="pb-4 mb-4 fst-italic border-bottom">
            Редактирование поставки
        </h3>

        <form method="POST" action="/supplies/{{ $supply->id }}">
            @csrf
            @method('PATCH')
            <div class="mb-3">
                <label class="form-label">Курс доллара ₽</label>
                <input type="number" step="0.1" class="form-control" placeholder="Введите курс доллара" name="dollar" value="{{ old('dollar', $supply->dollar) }}">
            </div>
            <div class="mb-3">
                <label class="form-label">Цена карго $</label>
                <input type="number" class="form-control" placeholder="Введите цену карго" name="cargo" value="{{ old('cargo', $supply->cargo) }}">
            </div>
            <div class="mb-3">
                <label class="form-label">Цена рынка ₽</label>
                <input type="number" class="form-control" placeholder="Введите цену хранения на рынке" name="market" value="{{ old('market', $supply->market) }}">
            </div>
            <div class="mb-3">
                <label class="form-label">Цена доставки ₽</label>
                <input type="number" class="form-control" placeholder="Введите цену доставки" name="delivery" value="{{ old('delivery', $supply->delivery) }}">
            </div>
            <div class="mb-3">
                <label class="form-label">Дата поставки</label>
                <input type="date" class="form-control" placeholder="Введите дату поставки" name="date" value="{{ old('date', $supply->date) }}">
            </div>

            <button type="submit" class="btn btn-primary">Изменить</button>
        </form>
        <br>
        <form method="POST" action="/supplies/{{ $supply->id }}">
        @csrf
        @method('DELETE')
            <button type="submit" class="btn btn-danger">Удалить</button>
        </form>

 </div>
