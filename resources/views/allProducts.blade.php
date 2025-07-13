    @php use Illuminate\Support\Str; @endphp
@extends('layout')

@section('header')
            <ul style="background-color: #004080;">
                <li><a href="/products">All</a></li>
                <li><a href="/products/Home">Home</a></li>
                <li><a href="/products/Electronics">Electronics</a></li>
                <li><a href="/products/Pets">Pets</a></li>
                <li><a href="/products/Games">Games</a></li>
                <li><a href="/products/Clothes">Clothes</a></li>
            </ul>
@endsection

@section('Count')
@if ($cart_items>0)( {{$cart_items}} ) Unique items, ( {{$cart_count}} ) Total amount @endif
@empty($cart_count)  @endempty

@endsection

@section('content')
<div class='grid-container'>


@foreach ( $products as $product)
  <div class='product-box'>
    <p class='price'>${{$product->price}}</p>

    <img src="{{ asset('storage/' . $product->image) }}" alt="Image Not Found" width="150" height="300" class='image'>

    <div class='product-details'>
      <div class='details-container'>
        <div class='text-container'>
          <p class='product-name'>{{$product->name}}</p>
          <p class='product-description'>{{ Str::limit($product->description, 50) }}</p>
        </div>
        <div class='product-add'>
          <form action="/products/addToCart" Method="POST">
            @csrf
            <input type="hidden" name="product_id" value="{{$product->id}}">
            <button type='submit' class="btn btn-primary">add to cart</button>
          </form>
        </div>
      </div>
    </div>
  </div>
@endforeach
</div>
@endsection

@section('footer')
    <div class="pages">
        {{ $products->links('pagination::bootstrap-4') }}
    </div>
@endsection

@section('styles')
<style>
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

nav {
    padding: 0;
    margin: 0;
}

nav ul {
    margin: 0;
    padding: 0;
    list-style: none;
    background: hsl(210, 100%, 35.5%);
    display: flex;
}

nav ul + ul {
    margin-top: 0; /* remove space between the two ul elements */
}


.product-description{
  font-size: 12px !important;
  color:hsl(0, 0.00%, 80%);
  margin:0;
}
.price{
  display: flex;
  align-items: center;
  justify-content: center;

  position: absolute;
  top: 0;
  right: 0;

  background-color: hsl(147, 50%, 47%);
  border: 1px solid black;
  margin: 0;
}
.product-details{
  display: flex;
  flex-wrap: wrap;
  text-align: left;
  align-items: flex-end;
  height: 100%;
}
.text-container, .details-container {
  display: flex;
  flex-direction: column;
  gap: 10px;
}
.image{
  position: absolute;
  top: 0;
  left: 0;
}
.price:hover{
  background-color: hsl(147, 50%, 30%);
}
.product-box {
  position: relative;
  width: 250px;
  height: 450px;
}
.product-name{
  color:black;
  font-weight: bold;
  font-size: 20px !important;
  margin: 0;
}
.product-add{
  display: flex;
  justify-content: center;
  margin:0;
}
.pages{
    margin:0;
    background: hsl(210, 100%, 35.5%);
}
</style>
@endsection
