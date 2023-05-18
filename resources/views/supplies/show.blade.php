<div class="col-md-8">
    <h3 class="pb-4 mb-4 fst-italic border-bottom">
        Поставка от {{ $supply->date }}
    </h3>

    <br>

    <p>Курс доллара = {{ $supply->dollar }} ₽</p>
    <p>Стоимость карго = {{ $supply->cargo }} $</p>
    <p>Стоимость хранения на рынке = {{ $supply->market }} ₽</p>
    <p>Стоимость доставки {{ $supply->delivery }} ₽</p>

    <hr>

    <a href="/supplies" class="btn btn-primary">Вернуться к списку поставок</a>

    <a href="/supplies/{{ $supply->id }}/edit" class="btn btn-light">Изменить</a>

</div>
