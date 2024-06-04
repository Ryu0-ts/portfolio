<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('/css/reset.css')}}">
    <link rel="stylesheet" href="{{asset('/css/common.css')}}">
    <link rel="stylesheet" href="{{asset('/css/search.css')}}">
    <script src="{{asset("js/toggle_button.js")}}" defer></script>
    <title>Document</title>
</head>
<body>
    <header class="header">
        <div class="header-inner">
            <a href="{{route("portfolio.index")}}" class="header-logo">
                <img src="{{asset("image/logo.png")}}">
                <h1>Pets First</h1>
            </a>
            <button class="toggle-menu-button"></button>
            <div class="header_site_menu">
                <nav class="site_menu">
                    <ul>
                        <li><a href="{{route('portfolio.about')}}">初めての方へ</a></li>
                        <li><a href="{{route('portfolio.search_dog')}}">保護犬を探す</a></li>
                        <li><a href="{{route('portfolio.search_cat')}}">保護猫を探す</a></li>
                        <li><a href="{{route('portfolio.contact')}}">お問い合わせ</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <nav>
        <div class="breadcrumbs">{{Breadcrumbs::render('serach_cat') }}</div>
    </nav>

    <main class="about">

        <article>
            <div class="grid">

                @foreach ($pet as $pe)
                <div class="pet">
                    <img src="{{Storage::url($pe->image)}}" alt="ペットの写真">
                    @if($pe->type ==0)
                        <p>種類:犬</p>
                    @else
                        <p>種類:猫</p>
                    @endif

                    @if($pe->gender ==0)
                        <p>性別:オス</p>
                    @else
                        <p>性別:メス</p>
                    @endif
                    <p>年齢:{{$pe->old}}歳</p>
                </div>
                @endforeach

            </div>

        </article>


    </main>


    <footer>
        <div class="footer">
            <div class="footer_left">
                <div class="footer_tel">
                    <p>TEL 01-2345-6789</p>
                </div>
                <div class="footer_address">
                    <p class="post_code">〒123-4567</p>
                    <p class="address">xxx県yyy市zzz区1丁目2-34</p>
                    <p class="building">aaa Building 203</p>
                </div>

                <div class="footer_sns">
                    <div class="sns_btn"><a href="https://twitter.com/XcorpJP" target="_blank"><img src="{{asset("image/sns/icons8-ツイッター-30.png")}}"></img></a></div>
                    <div class="sns_btn"><a href="https://www.youtube.com" target="_blank"><img src="{{asset("image/sns/icons8-youtube-30.png")}}"></img></a></div>
                    <div class="sns_btn"><a href="https://www.instagram.com" target="_blank"><img src="{{asset("image/sns/icons8-インスタグラム-30.png")}}"></img></a></div>                </div>
            </div>

            <div class="footer_right">
                <nav class="site_menu">
                    <ul>
                        <li><a href="{{route('portfolio.about')}}">初めての方へ</a></li>
                        <li><a href="{{route('portfolio.search_dog')}}">保護犬を探す</a></li>
                        <li><a href="{{route('portfolio.search_cat')}}">保護猫を探す</a></li>
                        <li><a href="{{route('portfolio.contact')}}">お問い合わせ</a></li>
                    </ul>
                </nav>
            </div>
        </div>

        <div class="copyright">
            <p><small>&copy; 2024 portfolio Site</small></p>
        </div>

    </footer>

</body>
</html>
