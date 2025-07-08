@extends('layout')
@section('content')
<div class='grid-container'>
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
  background-color: #f1f1f1;
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