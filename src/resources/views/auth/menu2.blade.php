@extends('layouts.back_app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/menu2.css') }}">
@endsection

@section('content')
<div class="menu2__content">
    <div class="menu2__item">
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/register">Registration</a></li>
            <li><a href="/login">Login</a></li>
        </ul>
    </div>
</div>
@endsection
