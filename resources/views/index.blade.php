@extends('layouts.master')

@section('content')

    <div class="logo">
        <img src="{{ asset('img') }}/logo.png"width="172.09px";
        height="189.81px">
    </div>
    <div class="title-bar"></div>
    <div class="img-bg"></div>
    @guest
    <div class="register">
        <b><a href="{{ route('register') }}">Register</a></b>
    </div>
    <div class="login">
        <b><a href="{{ route('login') }}">Login</a></b>
    </div>
    @else
    <b><a href="{{ route('logout') }}">Logout</a></b>

    @endguest
    <div class="queue-top">
        <a href="index.html">จองคิว</a>
    </div>

    <div class="bottom"></div>
    <div class="text-Contract">
        ช่องทางการติดต่อ<br>
        Fb : Parm Weerapat<br>
        Fb : Parinat Kanyala
    </div>
    <div class="text-address">
        ที่อยู่ทางร้าน<br>
        บ้านเลขที่ 255 ถ.บูรพาใน ต.ในเมือง
        อ.เมือง จ.อุบลราชธานี 34000
    </div>

@stop
