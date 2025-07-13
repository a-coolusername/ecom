@extends('layout')
@section('content')
<div class="product-box">
    <div class='product-box' data-id="{{ $product->id }}">

        <p class='price'>${{$product->price}}</p>

        <img src="{{ asset('storage/' . $product->image) }}" alt="Image Not Found" width="150" height="300" class='image'>

        <div class='product-details'>
            <div class='details-container'>
                <div class='text-container'>
                    <p class='product-name'>{{$product->name}}</p>
                    <p class='product-description'>{{ $product->description }}</p>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
