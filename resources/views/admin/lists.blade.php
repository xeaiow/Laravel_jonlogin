
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
                <th>群組</th>
                <th>加入時間</th>
                <th>編輯</th>
            </tr>
            @foreach ($member as $members)

                <tr>
                    <td>{{ $members->id }}</td>
                    <td>{{ $members->username }}</td>
                    <td>{{ $members->firstname }}</td>
                    <td>{{ $members->email }}</td>
                    <td>{{ $members->phone }}</td>
                    <td>{{ $members->qq_id }}</td>
                    <td>{{ $members->wechat_id }}</td>
                    <td>{{ $members->line_id }}</td>
                    <td>{{ $members->group }}</td>
                    <td>{{ $members->created_at }}</td>
                    <td>
                        <button type="button" onclick="location.href=' {{ url('/admin/'.$members->id.'/edit/') }} '">編輯</button>
                        <button type="button" onclick="location.href=' {{ url('/admin/'.$members->id.'/remove/') }} '">刪除</button>
                    </td>
                </tr>

            @endforeach
        </table>


    @endsection
