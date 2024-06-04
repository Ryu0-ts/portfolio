<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('/css/reset.css')}}">
    <link rel="stylesheet" href="{{asset('/css/common.css')}}">
    <script src="{{asset("js/toggle_button.js")}}" defer></script>
    <link rel="stylesheet" href="{{asset('/css/about.css')}}">
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
        <div class="breadcrumbs">{{Breadcrumbs::render('about') }}</div>
    </nav>



    <main>
        <div class="about">
            <article class="article">

                <div class="text_box">
                    <div class="purpose">
                        <h2>作った目的</h2>
                        <p>
                            「引越し先がペット禁止」「繁殖してしまい買えなくなった」「経済的余裕がなくなった」などさまざまな理由で放棄される犬猫たちがたくさんいます。行き先のなくいなってしまった犬猫たちと、里親となっていただける方のマッチングを円滑にすることを目的として作成いたしました。
                        </p>
                    </div>

                    <div class="philosophy">
                        <h2>理念</h2>
                        <p>
                            1匹でも多くの保護犬・保護猫を救うこと。そのような子たちが生まれない環境を作り出すこと。殺処分される子たちをゼロにすること。この3つの目標を達成することを目指しています。
                        </p>
                    </div>

                    <div class="explain">
                        <h2>保護犬・保護猫とは</h2>
                        <p>
                            保護犬・保護猫とは、飼い主がいない、迷子や飼育放棄などで居場所を失った犬・猫たちのことです。月齢は幅広く、犬種や猫種もさまざまです。病気で治療やケアが必要な子、老犬や老猫、虐待が原因で心身的に傷を負っている子、目や足が不自由な子など、様々な子たちがいます。
                        </p>
                    </div>

                    <div class="culling">
                        <h2>殺処分</h2>
                        <p>
                            2021年度に所有者がわからず引き取られた犬や猫は約5万8000匹で、そのうち殺処分されたのは1万4000匹とのことです。年々殺処分数は着実に減ってはいますが、それでも1日に換算すると毎日38匹の殺処分が行われていることになります。
                        </p>
                    </div>
            </article>

            <aside class="aside">
                <div class="side_menu">
                    <h3 class="aside-title">ご利用案内</h3>
                    <ul class="aside-menu">
                        <li><a href="#">里親になる心構え</a></li>
                        <li><a href="#">イベント</a></li>
                        <li><a href="#">よくあるご質問</a></li>
                        <li><a href="#">利用規約・プライバシーポリシー</a></li>
                    </ul>
                </div>
            </aside>
        </div>

        <div class="sns_box">
            <div class="twitter">
                <h3 class="aside-title">X (Twitter)</h3>
                <a class="twitter-timeline" data-height="315" width="315" href="https://twitter.com/webcreatorbox?ref_src=twsrc%5Etfw">Tweets by webcreatorbox</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>

            <div class="Facebook">
                <h3 class="aside-title">Facebook</h3>
                <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fwebcreatorbox.fb%2F&tabs=timeline&width=340&height=315&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=false&appId=229812980409867" width="310" height="315" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
            </div>

            <div class="youtube">
                <h3 class="aside-title">Youtube</h3>
                <iframe width="315" height="315" src="https://www.youtube.com/embed/aRNqI-xNDcA?si=wDYe8G4gfI3wC4E3" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
            </div>
        </div>
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
