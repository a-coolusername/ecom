@extends('layout')
@section("content")
<div class="main-container">
    <p class="main-text"> WHO WE ARE </p>
    <p class="subtle-text"> Amazon is a multinational technology company focused on e-commerce, cloud computing, digital streaming, and artificial intelligence. Founded in 1994 by Jeff Bezos. </p> <br />
    <p class="main-text"> Our vision </p> 
    <p class="subtle-text"> to be "Earth's most customer-centric company" and to build a place where people can find and discover anything they might want to buy online. </p> <br />
        <p class="main-text"> Our mission </p> 
    <p class="subtle-text"> Amazon's core mission is to be "Earth's most customer-centric company. </p> <br />
</div>
@endsection
@section('styles')
<style>
    .main-container{
        padding: 10px;
    }
    .main-text{
        font-family: Arial, sans-serif;
        color: hsl(0, 0%, 71%);
        font-size: 30px;
    }
    .subtle-text{
        font-family: Arial, sans-serif;
        color: hsl(0, 0%, 81%);
        font-size: 20px;
    }
</style>
@endsection