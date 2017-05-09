
    @extends('layout.main')

    @section('content')

        <form action="" method="post">
            {{ csrf_field() }}
            搜尋使用者：<input type="text" placeholder="輸入編號、帳號、信箱搜尋" name="search">
            <input type="submit" value="搜尋">
        </form><br/>

        <table border="1">
            <tr>
                <th>id</th>
                <th>username</th>
                <th>firstname</th>
                <th>email</th>
                <th>phone</th>
                <th>QQ</th>
                <th>Wechat</th>
                <th>LINE</th>
                <th>加入時間</th>
                <th>點數</th>
                <th>編輯</th>
            </tr>
            @foreach ($user as $users)

                <tr>
                    <td>{{ $users->id }}</td>
                    <td>{{ $users->username }}</td>
                    <td>{{ $users->firstname }}</td>
                    <td>{{ $users->email }}</td>
                    <td>{{ $users->phone }}</td>
                    <td>{{ $users->qq_id }}</td>
                    <td>{{ $users->wechat_id }}</td>
                    <td>{{ $users->line_id }}</td>
                    <td>{{ $users->created_at }}</td>
                    <td>{{ $users->point }}</td>
                    <td>
                        <button type="button" onclick="location.href=' {{ url('/user/'.$users->id.'/edit/') }} '">編輯</button>
                        <button type="button" onclick="location.href=' {{ url('/user/'.$users->id.'/deposit/') }} '">加值</button>
                        <button type="button" onclick="location.href=' {{ url('/user/'.$users->id.'/remove/') }} '">刪除</button>
                    </td>
                </tr>

            @endforeach
        </table>


    @endsection
