@extends('layout.master')
@section('content')
<div class="container">
    <h3 class="pb-4 mb-4 fst-italic border-bottom">
        Отчет
    </h3>
    
    <table class="table table-striped">
        <tr>
            <th scope="col">Дата поставки</th>
            <th scope="col">Название товара</th>
            <th scope="col">Цена за единицу</th>
            <th scope="col">Получение цены покупки из Китая за единицу</th>
            <th scope="col">Цена покупки из Китая за единицу</th>
            <th scope="col">Получение цены доставки из Китая за единицу</th>
            <th scope="col">Цена доставки из Китая за единицу</th>
        </tr>

        @each('reports.item', $reports, 'report')

    </table>
</div>
@endsection()