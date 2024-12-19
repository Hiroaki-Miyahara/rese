<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rese</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/common.css')}}">
    @yield('css')
</head>
<body>
    <div class="app__content">
        <header class="header__top">
            <div class="header__content">
                <a href="/menu2">
                    <img src="{{asset('storage/top_icon.png')}}" alt="menu">
                    <h2>Rese</h2>
                </a>
            </div>
        </header>
        <main>
            @yield('content')
        </main>
    </div>
</body>
</html>
