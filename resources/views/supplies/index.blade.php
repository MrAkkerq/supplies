@extends('layout.master')
@section('content')
<div class="container">
    <h3 class="pb-4 mb-4 fst-italic border-bottom">
        Список поставок
    </h3>

    @each('supplies.item', $supplies, 'supply')
    <br>

    <a class="btn btn-primary" href="/supplies/create">Создать поставку</a>
</div>
@endsection()
