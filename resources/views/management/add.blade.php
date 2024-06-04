<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/management_common.css') }}">
    <link rel="stylesheet" href="{{ asset('css/management_add.css') }}">
    <title>新規登録画面</title>
</head>

<body>
    <header class="header">
        <div class="management_list">
            <h1>管理画面</h1>
            <ul class="management_list_button">
                <a href="{{route("management.index")}}"><li>ホーム</li></a>
                <a href="{{route("management.add")}}"><li>新規追加</li></a>
                <a href="{{route("management.list")}}"><li>投稿一覧</li></a>
            </ul>
        </div>
    </header>
    <div class="add_form">
        <h1 class="form_title">新規入力画面</h1>
        @if (session('message'))
            <div class="session">
                {{ session('message') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="error_message">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('management.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <table class="form_table">
                <tr>
                    <th>
                        <div>種類</div>
                    </th>
                    <td class="{{$errors->has("type")? 'error_form' : ''}}">
                        <input type="radio" name="type" value=0 id="dog"><label for="dog">犬</label>
                        <input type="radio" name="type" value=1 id="cat"> <label for="cat">猫</label>
                        @if($errors->has("type"))
                            <div class="error">
                                {{$errors->first("type")}}
                            </div>
                        @endif
                    </td>
                </tr>
                <tr>
                    <th>状況</th>
                    <td class="{{$errors->has("situation")? 'error_form' : ''}}">
                        <input type="radio" name="situation" value=0 id="Recruitment"><label　for="Recruitment">募集中</label>
                        <input type="radio" name="situation" value=1 id="deadline"> <label for="deadline">締切</label>
                        @if($errors->has("situation"))
                            <div class="error">
                                {{$errors->first("situation")}}
                            </div>
                        @endif
                    </td>
                </tr>
                <tr>
                    <th>性別</th>
                    <td class="{{$errors->has("gender")? 'error_form' : ''}}">
                        <input type="radio" name="gender" value=0 id="male"><label for="male">オス<label>
                        <input type="radio" name="gender" value=1 id="female"> <label for="female">メス</label>
                        @if($errors->has("gender"))
                            <div class="error">
                                {{$errors->first("gender")}}
                            </div>
                        @endif
                    </td>
                </tr>
                <tr>
                    <th>種類・分別</th>
                    <td>
                        <input type="text" name="kind" value="{{old("kind")}}"class="{{$errors->has("kind")? 'error_form_text' : ''}}">
                        @if($errors->has("kind"))
                            <div class="error"a>
                                {{$errors->first("kind")}}
                            </div>
                        @endif
                    </td>

                </tr>
                <tr>
                    <th>年齢</th>
                    <td>
                        <input type="text" name="old" value="{{old("old")}}" class="{{$errors->has("old")? 'error_form_text' : ''}}"><span>歳</span>
                        @if($errors->has("old"))
                            <div class="error">
                                {{$errors->first("old")}}
                            </div>
                         @endif
                    </td>
                </tr>
                <tr>
                    <th>サイズ</th>
                    <td>
                        <input type="text" name="size" value="{{old("size")}}"class="{{$errors->has("size")? 'error_form_text' : ''}}" ><span>Kg</span>
                        @if($errors->has("size"))
                            <div class="error">
                                {{$errors->first("size")}}
                            </div>
                        @endif
                    </td>
                </tr>
                <tr>
                <th>ワクチン接種</th>
                    <td class="{{$errors->has("vaccine")? 'error_form' : ''}}">
                        <input type="radio" name="vaccine" value=0 id="true"><label for="true">有<label>
                        <input type="radio" name="vaccine" value=1 id="false"> <label for="false">無</label>
                        @if($errors->has("vaccine"))
                            <div class="error">
                                {{$errors->first("vaccine")}}
                            </div>
                        @endif
                    </td>
                </tr>
                <tr>
                    <th>去勢/不妊手術</th>
                    <td class="{{$errors->has("surgery")? 'error_form' : ''}}">
                        <input type="radio" name="surgery" value=0 id="true"><label for="true">有<label>
                        <input type="radio" name="surgery" value=1 id="false"> <label for="false">無</label>
                        @if($errors->has("surgery"))
                            <div class="error">
                                {{$errors->first("surgery")}}
                            </div>
                        @endif
                    </td>
                </tr>
                <tr>
                    <th>保護された経緯</th>
                    <td>
                        <textarea name="background" class="{{$errors->has("background")? 'error_form_text' : ''}}">{{old("background")}}</textarea>
                        @if($errors->has("background"))
                            <div class="error">
                                {{$errors->first("background")}}
                            </div>
                        @endif
                    </td>
                </tr>
                <tr>
                    <th>お引き取り条件</th>
                    <td>
                        <textarea name="terms" class="{{$errors->has("terms")? 'error_form_text' : ''}}">{{old("terms")}}</textarea>
                        @if($errors->has("terms"))
                            <div class="error">
                                {{$errors->first("terms")}}
                            </div>
                        @endif
                    </td>
                </tr>
                <tr>
                    <th>請求書</th>
                    <td>
                        <textarea name="invoice" class="{{$errors->has("invoice")? 'error_form_text' : ''}}">{{old("invoice")}}</textarea>
                        @if($errors->has("invoice"))
                            <div class="error">
                                {{$errors->first("invoice")}}
                            </div>
                        @endif
                    </td>
                </tr>
                <tr>
                    <th>合計金額</th>
                    <td>
                        <input type="text" name="total_price" value="{{old("total_price")}}"  class="{{$errors->has("total_price")? 'error_form_text' : ''}}"><span>円</span>
                        @if($errors->has("total_price"))
                            <div class="error">
                                {{$errors->first("total_price")}}
                            </div>
                        @endif
                    </td>
                </tr>
                <tr>
                    <th>その他</th>
                    <td>
                        <textarea name="others"  class="{{$errors->has("others")? 'error_form_text' : ''}}">{{old("others")}}</textarea>
                        @if($errors->has("others"))
                            <div class="error">
                                {{$errors->first("others")}}
                            </div>
                        @endif
                    </td>
                </tr>
                <tr>
                    <th>画像アップロード</th>
                    <td  class="{{$errors->has("image")? 'error_form' : ''}}">
                        <input type="file" name="image">
                        @if($errors->has("image"))
                            <div class="error">
                                {{$errors->first("image")}}
                            </div>
                        @endif
                    </td>
                </tr>
            </table>

            <div class="submit">
                <p class="submit_text">ご入力を確認の上、お間違いがなければ「送信」ボタンを押してください。</p>
                <input type="submit" class="submit_button">
            </div>
        </form>
    </div>
</body>

</html>
