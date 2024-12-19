@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/thanks.css') }}">
@endsection

@section('content')
<div class="thanks__content">
    <div class="thanks__item">
        <div class="thanks__comment">
            <p>会員登録ありがとうございます</p>
        </div>
        <div class="thanks__login-button">
            <a class="login__button" href="/login">ログインする</a>
        </div>
    </div>
</div>
@endsection
