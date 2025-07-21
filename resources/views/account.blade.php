@extends('layout')
@section('content')
    <div class="public-information">
    <p>Name: {{$user['name']}}</p>
    <p>E-mail: {{$user['email']}}</p>
    </div>
    <div class="change-password">
    <form method="post" action="/account">
        @csrf
        <label for="old-password">Enter your old password:</label>
        <input name="old-password"> <br />
        <label for="new-password">Enter your new password:</label>
        <input name="new-password"> <br />
        <label for="confirm-new-password">Enter your new password:</label>
        <input name="confirm-new-password"> <br />
        <button type="submit">Change password</button>
    </form>
    </div>
@endsection
