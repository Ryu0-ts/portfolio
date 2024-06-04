<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset("css/reset.css")}}">
    <link rel="stylesheet" href="{{asset("css/common.css")}}">
    <link rel="stylesheet" href="{{asset("css/show.css")}}">
    <script src="{{asset("js/toggle_button.js")}}" defer></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link href=”https://use.fontawesome.com/releases/v6.0.0/css/all.css” rel=”stylesheet”>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap" rel="stylesheet">
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


    <nav>
        <div class="breadcrumbs">{{Breadcrumbs::render('serach_dog/id',['id'=>$id->id])}}</div>
    </nav>

    <main class="main">
        <div class="show">
            <div class="show_img">
                <img src="{{Storage::url($id->image)}}" alt="ペットの写真">
            </div>

            <div class="status">
                <p>基本情報</p>
                <table>
                    <tr>
                        <th>ペットの種類</th>
                        <td colspan="3">
                            {{$id->kind}}
                        </td>
                    </tr>
                    <tr>
                        <th>状況</th>
                        <td>
                            @if ($id->situation==0)
                                募集中
                            @else
                                締切
                            @endif
                        </td>
                        <th>サイズ</th>
                        <td>{{$id->size}}Kg</td>
                    </tr>
                    <tr>
                        <th>性別</th>
                        <td>
                            @if($id->gender==0)
                                オス
                            @else
                                メス
                            @endif
                        </td>
                        <th>年齢</th>
                        <td>
                            {{$id->old}}歳
                        </td>
                    </tr>
                    <tr>
                        <th>予防接種</th>
                        <td>
                            @if ($id->veccine==0)
                                接種済
                            @else
                                未接種
                            @endif
                        </td>
                        <th>去勢/避妊</th>
                        <td>
                            @if($id->surgery==0)
                                手術済
                            @else
                                未手術
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>掲載日</th>
                        <td>
                            {{$id->updated_at->format("Y/m/d")}}
                        </td>
                        <th>掲載期限</th>
                        <td>
                            <span class="limit_date">{{$id->updated_at->modify("+1 Year")->format("Y/m/d")}}</span>
                        </td>
                    </tr>
                </table>
            </div>

            <div class="others">
                <p>詳細情報</p>
                <table>
                    <tr>
                        <th>募集の経緯</th>
                        <td>{{$id->background}}</td>
                    </tr>

                    <tr>
                        <th>条件</th>
                        <td><textarea>{{$id->terms}}</textarea></td>
                    </tr>

                    <tr>
                        <th>その他 備考</th>
                        <td><textarea>{{$id->others}}</textarea></td>
                    </tr>
                </table>
            </div>

            <div class="cost">
                <p>移譲費用について</p>
                <div class="cost_table">
                    <div class="cost_receipt">
                        <textarea class="recipt_area">{{$id->receipt}}</textarea>
                    </div>

                    <div class="cost_total">
                        <p>合計金額<span>{{number_format($id->total_price) }}円</span></p>
                    </div>
                </div>
            </div>

            <div class="application">
                <a href="{{route('portfolio.contact')}}">
                    <button>お問い合わせ・お申し込み</button>
                </a>
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


