@extends('layouts.app2')

@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('content')
<div class="login__content">
    <div class="login__form">
        <div class="login__form-heading">
            <p>Login</p>
        </div>
        <form class="form" action="/login" method="post">
            @csrf
            <div class="form__input--content">
                <div class="form__content">
                    <div class="form__input--text">
                        <img src="{{ asset('storage/mail.png') }}" alt="mail">
                        <input type="email" name="email" placeholder="Email" value="{{ old('email') }}">
                    </div>
                    <div class="form__error">
                        @error('email')
                        {{ $massage }}
                        @enderror
                    </div>
                </div>
                <div class="form__content">
                    <div class="form__input--text">
                        <img src="{{ asset('storage/password.png') }}" alt="password">
                        <input type="password" name="password" placeholder="Password" />
                    </div>
                    <div class="form__error">
                        @error('password')
                        {{ $massage }}
                        @enderror
                    </div>
                </div>
                <div class="form__button">
                    <button class="form__button-submit" type="submit">ログイン</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
