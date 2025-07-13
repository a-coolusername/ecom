@extends('layout')
@section('content')

    <div class="individual-product">
        <img src="{{ asset('storage/' . $product->image) }}" alt="Image Not Found" class="product-image">

        <div class="product-details">
            <h1>{{ $product->name }}</h1>
            <br>
            <p>{{ $product->description }}</p>
            <br><br>
                <div class="button" style="
                                width: 100%;
                                display: flex;
                                justify-content: center;
                                margin-top: 20px;">
                    @include('addToCartButton')
                </div>
        </div>
    </div>

@endsection

@section('styles')
    <style>
        .individual-product {
            display: flex;
            justify-content: center;
            align-items: flex-start;
            gap: 20px;
            padding: 20px;
        }

        .product-image {
            max-height: 400px;
            height: auto;
            width: auto;
            object-fit: contain;
            border-radius: 8px;
        }

        .product-details {
            display: flex;
            flex-direction: column;
            flex-wrap: wrap;
            text-align: left;
            align-items: flex-start;
            height: 100%;
        }
    </style>
@endsection
