<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Welcome Email</title>
</head>
<body>
<h1>Your order is ready to be shipped!</h1>
<h2>Order review:</h2>
<table>
    <thead>
    <tr>
        <th>Product</th>
        <th>Price (each)</th>
        <th>Quantity</th>
        <th>Total</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($items as $item)
        <tr>
            <td>{{ $item['name'] }}</td>
            <td>${{ number_format($item['price'], 2) }}</td>
            <td>{{ $item['quantity'] }}</td>
            <td>${{ number_format($item['total'], 2) }}</td>
        </tr>
    @endforeach
    </tbody>
</table>

@php
    $grandTotal = array_sum(array_column($items, 'total'));
@endphp

<p><strong>Total: ${{ number_format($grandTotal, 2) }}</strong></p>
</body>
</html>
