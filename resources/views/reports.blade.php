
{{--@dd($reports)--}}
{{--<table>--}}
{{--    <h1>Отчет</h1>--}}

{{--    <p>Дата поставки 22.02.2022</p>--}}
{{--    <tr>--}}
{{--        <th>Наименование товара</th>--}}
{{--        <th>Цена на за единицу</th>--}}
{{--    </tr>--}}

{{--    <tr><td>O 1</td><td>21.79</td>--}}
{{--    <tr><td>NewF1</td><td>58.54</td>--}}
{{--</table>--}}
<div class="col-md-8">
    <h3 class="pb-4 mb-4 fst-italic border-bottom">
        Отчет
    </h3>
    <table class="table table-striped">
        <tr>
            <th scope="col">Дата поставки</th>
            <th scope="col">Название товара</th>
            <th scope="col">Цена за единицу</th>
        </tr>

        @each('test', $reports, 'report')

    </table>
</div>
