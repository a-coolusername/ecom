@extends('layout')
@section("content")
<div class="main-container">
    <p class="main-text"> WHO WE ARE MAKE THIS  A LOGIN PAGE WITH AUTH USER ONLY CAN CONTINUE </p>
    <p class="subtle-text"> Amazon is a multinational technology company focused on e-commerce, cloud computing, digital streaming, and artificial intelligence. Founded in 1994 by Jeff Bezos. </p> <br />
    <p class="main-text"> Our vision </p>
    <p class="subtle-text"> to be "Earth's most customer-centric company" and to build a place where people can find and discover anything they might want to buy online. </p> <br />
        <p class="main-text"> Our mission </p>
    <p class="subtle-text"> Amazon's core mission is to be "Earth's most customer-centric company. </p> <br />
</div>
@endsection
@section('styles')
<style>
    body{
        background:hsl(0, 0%, 94%);
    }
    .main-container{
        background-color: hsl(0, 0%, 60%);
        padding: 10px;
        border-radius: 20px;
    }
    .main-text{
        font-family: Arial, sans-serif;
        color: hsl(0, 0%, 81%);
        font-size: 30px;
    }
    .subtle-text{
        font-family: Arial, sans-serif;
        color: hsl(0, 0%, 94%);
        font-size: 20px;
    }
</style>
@endsection
