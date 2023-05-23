<div class="col-md-8" xmlns="http://www.w3.org/1999/html">
    <h3 class="pb-4 mb-4 fst-italic border-bottom">
        Создание поставки
    </h3>

    <form method="POST" action="/supplies">
        @csrf
        <div class="mb-3">
            <label class="form-label">Курс доллара ₽</label>
            <input type="number" step="0.01" class="form-control" placeholder="Введите курс доллара" name="dollar" value="{{ old('dollar') }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Цена карго $</label>
            <input type="number" class="form-control" placeholder="Введите цену карго" name="cargo" value="{{ old('cargo') }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Цена рынка ₽</label>
            <input type="number" class="form-control" placeholder="Введите цену хранения на рынке" name="market" value="{{ old('market') }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Цена доставки ₽</label>
            <input type="number" class="form-control" placeholder="Введите цену доставки" name="delivery" value="{{ old('delivery') }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Дата поставки</label>
            <input type="date" class="form-control" placeholder="Введите дату поставки" name="date" value="{{ old('date') }}">
        </div>
        <button type="submit" class="btn btn-primary">Создать поставку</button>
    </form>
</div>
