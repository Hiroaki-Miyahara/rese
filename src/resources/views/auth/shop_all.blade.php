@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/shop_all.css') }}">
@endsection

@section('content')
<div class="home__content">
    <div class="home__search-box">
        <form class="search-form" action="{{ route('posts.shop') }}" method="get">
        @csrf
            <label for="">
                <div class="search-form__item">
                    <select class="search-area" name="area" id="">
                        <option value="" selected>All area</option>
                        <option value="tokyo">東京都</option>
                        <option value="osaka">大阪府</option>
                        <option value="fukuoka">福岡県</option>
                    </select>
                    <select class="search-genre" name="genre" id="">
                        <option value="" selected>All genre</option>
                        <option value="sushi">寿司</option>
                        <option value="italian">イタリアン</option>
                        <option value="ramen">ラーメン</option>
                        <option value="tavern">居酒屋</option>
                        <option value="korean-barbecue">焼肉</option>
                    </select>
                    <div class="search-box">
                        <img src="{{asset('storage/search.png')}}" alt="">
                        <input class="search-shop" type="text" name="keyword" value="{{ $keyword }}" placeholder="Search ...">
                    </div>
                </div>
            </label>
        </form>
    </div>
    <div class="shop__content">
    @forelse($shops as $shop)
        <div class="shop__card">
            <div class="card-img">
                <img src="{{ $shop->image }}" alt="shop">
            </div>
            <div class="card__content">
                <div class="card-text">
                    <h2>{{ $shop->title }}</h2>
                    <p>#{{ $shop->area }}</p>
                    <p>#{{ $shop->genre }}</p>
                </div>
                <div class="card-button">
                    <a href="/shop_detail">
                        <button class="shop_detail__button" type="submit">詳しくみる</button>
                    </a>
                    <label class="switch_label" for="like_switch">
                        <div class="like_switch">
                            <input class="like_switch-input" type="checkbox" id="like_switch" />
                            <div class="heart"></div>
                        </div>
                    </label>
                </div>
            </div>
        </div>
    @empty
        <p>No shops</p>
    @endforelse
    </div>
</div>
@endsection
