@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/done.css') }}">
@endsection

@section('content')
<div class="done__content">
    <div class="done__item">
        <div class="done__comment">
            <p>ご予約ありがとうございます</p>
        </div>
        <div class="done__back-button">
            <a class="back__button" href="/">戻る</a>
        </div>
    </div>
</div>
@endsection
