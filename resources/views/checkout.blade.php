<div class="receipt">

    <h2>Order Summary</h2>

    @foreach ($items as $item)
        <h3>
            You ordered {{ $item['quantity'] }} of {{ $item['name'] }} at ${{ number_format($item['price'], 2) }} each
            (Total: ${{ number_format($item['total'], 2) }})
        </h3>
    @endforeach

<h2>Total: {{$sum}}</h2>
<h2>Tax: {{$sum*0.16}}</h2>
<h1>Final price: {{$sum*1.16}}</h1>


    <div class="purchase"><form method="post" action="/products/purchase"> @csrf <button class="btn btn-primary">
                Click to purchase</button></form></div>
</div>
<style>
    .receipt{
        border-radius: 20px;
        margin: 25px;
        background-color: lightgray;
        text-align: center;
    }
</style>
