@extends('layouts.back_app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/menu1.css') }}">
@endsection

@section('content')
<div class="menu1__content">
    <div class="menu1__item">
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/logout">Logout</a></li>
            <li><a href="/my_page">Mypage</a></li>
        </ul>
    </div>
</div>
@endsection
