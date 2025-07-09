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
  <div>
    <p class='price'>{{$product->price}}</p>
    <h4>{{$product->name}}</h4>

    @php use Illuminate\Support\Str; @endphp
    <p class='product-description'>{{ Str::limit($product->description, 50, '...') }}</p>
  </div>
@endforeach


    <div><p>1</p></div>
    <div><p>2</p></div>
    <div><p>3</p></div>
    <div><p>4</p></div>
    <div><p>5</p></div>
    <div><p>6</p></div>
    <div><p>7</p></div>
    <div><p>8</p></div>
    <div><p>9</p></div>
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
  font-size: 10px;
  color:hsl(0, 0.00%, 80%);
}
.price{
  position: absolute;
  top: 0px;
  right: 0;
  width: 20px;
  height: 10px;
}
</style>
@endsection