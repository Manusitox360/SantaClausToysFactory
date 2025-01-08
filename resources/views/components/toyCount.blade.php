<h2>Juguetes por Franja de Edad</h2>
<table border="1">
    <thead>
        <tr>
            <th>Franja de Edad</th>
            <th>Cantidad de Juguetes</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($ageRanges as $range)
            <tr>
                <td>{{ $range->min }} - {{ $range->max ?? '+' }}</td>
                <td>{{ $range->toys_count }}</td>
            </tr>
        @endforeach
        <tr>
            <td><strong>Total</strong></td>
            <td><strong>{{ $totalToys }}</strong></td>
        </tr>
    </tbody>
</table>
