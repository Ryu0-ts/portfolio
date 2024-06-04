<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('/css/reset.css')}}">
    <link rel="stylesheet" href="{{asset('/css/common.css')}}">
    <link rel="stylesheet" href="{{asset('/css/contact.css')}}">
    <script src="{{asset("js/toggle_button.js")}}" defer></script>
    <script src="https://yubinbango.github.io/yubinbango/yubinbango.js" charset="UTF-8"></script>
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
        <div class="breadcrumbs">{{Breadcrumbs::render('contact') }}</div>
    </nav>

    <main>
        <div class="contact">
            <h3>お問い合わせフォーム</h3>
            <form class="h-adr">
            <span class="p-country-name" style="display:none;">Japan</span>
                <dl class="contact_form">
                    <dt>お名前</dt>
                    <dd><input type="text" class="input_text" placeholder="山田 太郎"></dd>
                    <dt>フリガナ</dt>
                    <dd><input type="text" class="input_text" placeholder="ヤマダ タロウ"></dd>
                    <dt>郵便番号</dt>
                    <dd><input type="text" class="input_text p-postal-code" size="8" maxlength="8" placeholder="8120011"></dd>
                    <dt>県名</dt>
                    <dd><input type="text" class="input_text p-region" placeholder="福岡県" readonly></dd>
                    <dt>市長区村</dt>
                    <dd><input type="text" class="input_text p-locality" placeholder="福岡市博多区" readonly></dd>
                    <dt>町域</dt>
                    <dd><input type="text" class="input_text p-street-address" placeholder="博多駅前"></dd>
                    <dt>建物名・部屋番号</dt>
                    <dd><input type="text" class="input_text p-extended-address" placeholder="〇〇ビルディング 101号室"></dd>
                    <dt>お電話番号</dt>
                    <dd><input type="tel"  class="input_text" size="11" maxlength="11" placeholder="08012345678"></dd>
                    <dt>メールアドレス</dt>
                    <dd><input type="text" class="input_text" placeholder="xxxxx@example.com"></dd>
                    <dt>お問い合わせ種別</dt>
                    <dd>
                        <select class="select_box">
                            <option>保護されている動物を引き取りたい</option>
                            <option>サイトのご利用について</option>
                            <option>取材に関するお問い合わせ</option>
                            <option>その他</option>
                        </select>
                    </dd>
                    <dt>お問い合わせ内容</dt>
                    <dd><textarea class="textarea" placeholder="入力内容"></textarea></dd>

                    <div class="submit">
                        <p class="submit_text">ご入力を確認の上、お間違いがなければ「送信」ボタンを押してください。</p>
                        <input type="submit" class="submit_button">
                    </div>

                </dl>


            </form>
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
