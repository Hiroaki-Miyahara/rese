@extends('layouts.app2')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('content')
<div class="register__content">
    <div class="register__form">
        <div class="register__form-heading">
            <p>Registration</p>
        </div>
        <form class="form" action="/register" method="post">
            @csrf
            <div class="form__input--content">
                <div class="form__content">
                    <div class="form__input--text">
                        <img src="{{ asset('storage/user.png') }}" alt="user">
                        <input type="text" name="name" placeholder="Usename" value="{{ old('name') }}" />
                    </div>
                    <div class="form__error">
                        @error('name')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="form__content">
                    <div class="form__input--text">
                        <img src="{{ asset('storage/mail.png') }}" alt="mail">
                        <input type="email" name="email" placeholder="Email" value="{{ old('email') }}">
                    </div>
                    <div class="form__error">
                        @error('email')
                        {{ $message }}
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
                        {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="form__button">
                    <button class="form__button-submit" type="submit">登録</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
