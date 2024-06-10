<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset("css/reset.css")}}">
    <link rel="stylesheet" href="{{asset("css/management_add.css")}}">
    <link rel="stylesheet" href="{{asset("css/management_common.css")}}">
    <title>Document</title>
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
        <h1 class="form_title">編集画面</h1>
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

        <form action="{{route('management.update',$id)}}" method="POST" enctype="multipart/form-data" >
            @csrf
            <table class="form_table">
                <tr>
                    <th>種類</th>
                    <td>
                        <input type="radio" name="type" value=0 id="dog" {{$id->type == 0 ? "checked" : "" }}><label for="dog">犬</label>
                        <input type="radio" name="type" value=1 id="cat" {{$id->type == 1 ? "checked" : "" }}> <label for="cat">猫</label>
                        @if($errors->has("type"))
                            <div class="error">
                                {{$errors->first("type")}}
                            </div>
                        @endif
                    </td>
                </tr>
                <tr>
                    <th>状況</th>
                    <td>
                        <input type="radio" name="situation" value=0 id="Recruitment" {{$id->situation == 0 ? "checked" : "" }}><label for="Recruitment">募集中</label>
                        <input type="radio" name="situation" value=1 id="deadline" {{$id->situation == 1 ? "checked" : "" }}> <label for="deadline">締切</label>
                        @if($errors->has("situation"))
                            <div class="error">
                                {{$errors->first("situation")}}
                            </div>
                        @endif
                    </td>
                </tr>
                <tr>
                    <th>性別</th>
                    <td>
                        <input type="radio" name="gender" value=0 id="male" {{$id->gender == 0 ? "checked" : ""}}><label for="male">オス<label>
                        <input type="radio" name="gender" value=1 id="female" {{$id->gender == 1 ? "checked" : ""}}> <label for="female">メス</label>
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
                        <input type="text" name="kind" value="{{old("kind",$id->kind)}}">
                        @if($errors->has("kind"))
                            <div class="error">
                                {{$errors->first("kind")}}
                            </div>
                        @endif
                    </td>
                </tr>
                <tr>
                    <th>年齢</th>
                    <td>
                        <input type="text" name="old" value="{{old("old",$id->old)}}"><span>歳</span>
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
                        <input type="text" name="size" value="{{old("size",$id->size)}}"><span>Kg</span>
                        @if($errors->has("size"))
                            <div class="error">
                                {{$errors->first("size")}}
                            </div>
                        @endif
                    </td>
                </tr>
                <tr>
                <th>ワクチン接種</th>
                    <td>
                        <input type="radio" name="vaccine" value=0 id="vaccine_true" {{$id->vaccine == 0 ? "checked" : ""}}><label for="vaccine_true">有<label>
                        <input type="radio" name="vaccine" value=0 id="vaccine_false" {{$id->vaccine == 1 ? "checked" : ""}}> <label for="vaccine_false">無</label>
                        @if($errors->has("vaccine"))
                            <div class="error">
                                {{$errors->first("vaccine")}}
                            </div>
                        @endif
                    </td>
                </tr>
                <tr>
                    <th>去勢/不妊手術</th>
                    <td>
                        <input type="radio" name="surgery" value=0 id="surgery_true"{{$id->surgery == 0 ? "checked" : ""}}><label for="surgery_true">有<label>
                        <input type="radio" name="surgery" value=1 id="surgery_false"{{$id->surgery == 1 ? "checked" : ""}}> <label for="surgery_false">無</label>
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
                        <textarea name="background">{{old("background",$id->background)}}</textarea>
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
                        <textarea name="terms">{{old("terms",$id->terms)}}</textarea>
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
                        <textarea name="invoice">{{old("invoice",$id->receipt)}}</textarea>
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
                        <input type="text" name="total_price" value="{{old("total_price",$id->total_price)}}"><span>円</span>
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
                        <textarea name="others">{{old("others",$id->others)}}</textarea>
                        @if($errors->has("others"))
                            <div class="error">
                                {{$errors->first("others")}}
                            </div>
                        @endif
                    </td>
                </tr>
                <tr>
                    <th>現在の画像</th>
                    <td><img src="{{Storage::url($id->image)}}" alt="ペットの写真"></td>
                </tr>
                <tr>
                    <th>画像アップロード</th>
                    <td>
                        <input type="file" name="image">
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





