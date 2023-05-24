<tr>
    <td>{{ $report->supply->date }}</td>
    <td>{{ $report->name }}</td>
    <td>{{ $report->price }}</td>
    <td>{{ $report->product->price }} yuan * {{ $report->product->yuan }} / {{ $report->product->quantity }} шт. </td>
    <td>{{ $report->product_price }}</td>
    <td>{{ $report->supply->getPrice() }} рублей / {{ $report->product->getProductQuantityInSupply($report->supply->id) }} ед. товара в поставке </td>
    <td>{{ $report->delivery_price }}</td>
</tr>

