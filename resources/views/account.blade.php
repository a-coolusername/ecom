@extends('layout')
@section('content')

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if (session('error-old'))
        <div class="alert alert-danger">
            {{ session('error-old') }}
        </div>
    @endif

    @if (session('error-other'))
        <div class="alert alert-danger">
            {{ session('error-other') }}
        </div>
    @endif

    <div class="public-information">
    <p>Name: {{$user['name']}}</p>
    <p>E-mail: {{$user['email']}}</p>
    </div>
    <div class="change-password">
    <form method="post" action="/account">
        @csrf
        <label for="old-password">Enter your old password:</label>
        <input name="old-password" required> <br />
        <label for="new-password">Enter your new password:</label>
        <input name="new-password" required> <br />
        <label for="confirm-new-password">Enter your new password:</label>
        <input name="confirm-new-password" required> <br />
        <button type="submit">Change password</button>
    </form>
    </div>
@endsection
