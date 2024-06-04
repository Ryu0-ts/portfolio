<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset("css/reset.css")}}">
    <link rel="stylesheet" href="{{asset("css/management_common.css")}}">
    <link rel="stylesheet" href="{{asset("css/management_index.css")}}">
    <title>管理画面</title>
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
    <div class="main">
        <h1>管理画面</h1>
        <div class="menu">
            <ul>
                <a href="{{route("management.add")}}"><li>保護動物のデータを追加する</li></a>
                <a href="{{route("management.list")}}"><li>登録された保護動物を確認する</li></a>
            </ul>
        </div>
    </div>

</body>
</html>
