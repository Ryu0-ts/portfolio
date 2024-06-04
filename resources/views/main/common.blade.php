<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset("css/reset.css")}}">
    <link rel="stylesheet" href="{{asset("css/common_test.css")}}">
    <script src="{{asset("js/toggle_button.js")}}" defer></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link href=”https://use.fontawesome.com/releases/v6.0.0/css/all.css” rel=”stylesheet”>
    <title>タイトル名</title>
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

    <main class="main">

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
                    <div class="sns_btn"><a href="https://www.instagram.com" target="_blank"><img src="{{asset("image/sns/icons8-インスタグラム-30.png")}}"></img></a></div>
                </div>

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
