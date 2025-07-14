@extends('layout')

@section('scripts')
    <script>
        document.querySelectorAll('.product-box').forEach(box => {
            box.addEventListener('click', function () {
                const productId = this.getAttribute('data-id');
                window.location.href = `/products/${productId}`;
            });
        });
    </script>

@endsection

@section('content')

    <div class="individual-product">
        <img src="{{ asset('storage/' . $product->image) }}" alt="Image Not Found" class="product-image">

        <div class="product-selected-details">
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

    <div class="separation"></div>

    <div class='grid-container'>


        @foreach ( $relatedProducts as $product)
            <div class='product-box' data-id="{{ $product->id }}">

                <p class='price'>${{$product->price}}</p>

                <img src="{{ asset('storage/' . $product->image) }}" alt="Image Not Found" width="150" height="300" class='image'>

                <div class='product-details'>
                    <div class='details-container'>
                        <div class='text-container'>
                            <p class='product-name'>{{$product->name}}</p>
                            <p class='product-description'>{{ Str::limit($product->description, 50) }}</p>
                        </div>
                        @include('addToCartButton')
                    </div>
                </div>
            </div>
        @endforeach
    </div>
        {{$relatedProducts->links('pagination::bootstrap-4')}}
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

        .product-selected-details {
            display: flex;
            flex-direction: column;
            flex-wrap: wrap;
            text-align: left;
            align-items: flex-start;
            height: 100%;
        }
        .separation{
            height: 35px;
            width: 100%;
        }
        .grid-container {
            display: grid;
            grid-template-columns: 25% 25% 25% 25%;
            padding: 20px;
            place-items: center;
        }
        .grid-container > div {
            background-color:hsl(0, 0.00%, 94.50%);
            border: 1px solid black;
            padding: 10px;
            font-size: 30px;
            text-align: center;
        }
        .grid-container > div > p {
            padding: 5px;
            font-size: 30px;
        }

    </style>
@endsection
