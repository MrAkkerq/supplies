@extends('layout.master')
@section('content')
<div class="col-md-8">
    <h3 class="pb-4 mb-4 fst-italic border-bottom">
        Список поставок
    </h3>

    @each('supplies.item', $supplies, 'supply')
    <br>

    <a class="p-2 link-secondary" href="/supplies/create">Создать поставку</a>
    <a class="p-2 link-secondary" href="/reports">Отчеты по поставкам</a>

</div>
@endsection()
