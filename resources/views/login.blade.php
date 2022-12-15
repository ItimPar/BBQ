@extends('layouts.master')
<link rel="stylesheet" href="{{ asset('css') }}/login.css">

@section('content')

    @if ($message = Session::get('success'))
        <div class="alert alert-info">{{ $message }}</div>
    @endif

    <div class="logo">
        <img src="{{ asset('img') }}/logo.png"width="172.09px";
        height="189.81px">
    </div>
    <div class="title-bar"></div>
    <div class="img-bg"></div>
    <div class="login-box">
        <div class="text-login">
            Login
        </div>


        <div class="username text-white">
            Username
        </div>
        <div class="password text-white">
            Password
        </div>

        <form action="{{ route('login.check') }}" method="post">
            @csrf
            <div class="in-user">
            <input type="text" name="username" id="username" required autofocus>
            </div>
            <div class="in-pass">
            <input type="password" name="password" id="password" required>
            </div>
            <div class="button">
            <button type="submit" name="signin" >Login</button>
            </div>
        </form>
        <div class="dont">
            Don’t have an account? <a href="{{ route('register') }}">Register</a>
        </div>
    </div>

@endsection
