@extends('layout')

@section('content')
    @foreach ($cartProducts as $product)
        <div class="product-card">
            <div class="product-image">
                <img src="{{ asset('storage/' . $product->image) }}" alt="Image Not Found" width="150" height="300">
            </div>
            <div class="product-details">
                <p class="product-name">{{ $product->name }}</p>
                <p class="product-description">{{ $product->description }}</p>
                <p class="product-price">${{ $product->price }}</p>
            </div>
        </div>
    @endforeach

    <div class='checkout-button'>
        <form action="/products/Checkout" Method="POST">
            @csrf
            <input type="hidden" name="product_id" value="{{$product->id}}">
            <button type='submit' class="btn btn-primary">Checkout</button>
        </form>
    </div>
@endsection

@section('styles')
    <style>

        .product-card {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
            justify-content: space-between;
            margin-bottom: 30px;
            background-color: hsl(0, 0%, 94.5%);
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
        }


        .product-image img {
            max-width: 150px;
            max-height: 300px;
            object-fit: contain;
            border-radius: 8px;
        }


        .product-details {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            padding: 10px;
            text-align: left;
        }


        .product-name {
            font-weight: bold;
            font-size: 1.2em;
            margin-bottom: 5px;
        }

        .product-description {
            font-size: 0.9em;
            color: #555;
            margin-bottom: 10px;
        }

        .product-price {
            font-size: 1.1em;
            color: #2c3e50;
        }


            .product-image img {
                max-width: 100%;
                max-height: 200px;
            }

        .checkout-button{
            display: flex;
            justify-content: center;
            margin:0;
        }
    </style>
@endsection
