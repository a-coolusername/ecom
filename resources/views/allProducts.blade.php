    @php use Illuminate\Support\Str; @endphp
@extends('layout')

@section('header')
            <ul style="background-color: #004080;">
                <li><a href="/products">All</a></li>
                <li><a href="#">Electronics</a></li>
                <li><a href="#">Home</a></li>
                <li><a href="#">Pets</a></li>
                <li><a href="#">Games</a></li>
                <li><a href="#">Clothes</a></li>
            </ul>
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
          <p class='product-description'>{{ Str::limit($product->description, 50, '...') }}</p>
        </div>
        <div class='product-add'>
          <form action="/products" Method="POST">
            @csrf
            <button type='submit'>add to cart</button>
          </form>
        </div>
      </div>
    </div>
  </div>
@endforeach
</div>
@endsection
@section('styles')
<style>
.grid-container {
  display: grid;
  grid-template-columns: auto auto auto;
  padding: 20px;
  margin-top: 30px;
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
  font-size: 10px !important;
  color:hsl(0, 0.00%, 80%);
  margin:0px;
}
.price{
  display: flex;
  align-items: center;
  justify-content: center; 

  position: absolute;
  top: 0;
  right: 0;
  width: 30px;
  height: 20px;
  background-color: hsl(147, 50%, 47%);
  border: 1px solid black;  
  margin: 0px;
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
  width: 200px;
  height: 400px;
}
.product-name{
  color:black;
  font-weight: bold;
  font-size: 15px !important;
  margin: 0px;
}
.product-add{
  display: flex;
  justify-content: center;
  margin:0px;
}
</style>
@endsection