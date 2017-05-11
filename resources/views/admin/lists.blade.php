
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
            @foreach ($info as $infos)

                <tr>
                    <td>{{ $infos->id }}</td>
                    <td>{{ $infos->username }}</td>
                    <td>{{ $infos->firstname }}</td>
                    <td>{{ $infos->email }}</td>
                    <td>{{ $infos->phone }}</td>
                    <td>{{ $infos->qq_id }}</td>
                    <td>{{ $infos->wechat_id }}</td>
                    <td>{{ $infos->line_id }}</td>
                    <td>{{ $infos->title }}</td>
                    <td>{{ $infos->created_at }}</td>
                    <td>
                        <button type="button" onclick="location.href=' {{ url('/admin/'.$infos->id.'/edit/') }} '">編輯</button>
                        <button type="button" onclick="location.href=' {{ url('/admin/'.$infos->id.'/remove/') }} '">刪除</button>
                    </td>
                </tr>

            @endforeach
        </table>


    @endsection
