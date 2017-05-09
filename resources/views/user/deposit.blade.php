
    @extends('layout.main')

    @section('content')

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
                <th>目前點數</th>
            </tr>

            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->username }}</td>
                <td>{{ $user->firstname }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->phone }}</td>
                <td>{{ $user->qq_id }}</td>
                <td>{{ $user->wechat_id }}</td>
                <td>{{ $user->line_id }}</td>
                <td>{{ $user->created_at }}</td>
                <td>{{ $user->point }}</td>
            </tr>

        </table><br/>

        <form action="" method="post">
            {{ csrf_field() }}
            <input type="number" name="deposit" placeholder="加值點數">
            <input type="submit" value="加值">
        </form>

    @endsection
