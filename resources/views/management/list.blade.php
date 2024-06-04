<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset("css/reset.css")}}">
    <link rel="stylesheet" href="{{asset("css/management_common.css")}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset("css/management_list.css")}}">
    <title>一覧画面</title>
</head>
<body>
    <script src="https://cdn.tailwindcss.com"></script>

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

    <div class="list_table">
        <table class="table">
            <tr class="heading">
                <th>管理ID</th>
                <th>種別</th>
                <th>最終更新日</th>
                <th>削除予定日</th>
                <th colspan="2"></th>
            </tr>

            @foreach ($list as $list_db)
            <tr>
                <td class="id">{{$list_db->id}}</td>
                <td>
                    @if ($list_db->gender==0)
                        犬
                    @else
                        猫
                    @endif
                </td>
                <td>{{$list_db->created_at->format("Y/m/d")}}</td>
                <td>{{$list_db->created_at->modify("+1 Year")->format("Y/m/d")}}</td>
                <td  class="button">
                    <a href="{{route("management.edit",$list_db->id)}}"><button class="edit_button">編集</button></a>
                    <a href="{{route("management.delete",$list_db->id)}}"><button class="delete_button">削除</button></a>
                </td>
            </tr>
            @endforeach
        </table>

        <div>
            {{ $list->links("vendor.pagination.bootstrap-4") }}
        </div>
    </div>

</body>
</html>
