
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
            @foreach ($info['member'] as $infos['member'])

                <tr>
                    <td>{{ $infos['member']->id }}</td>
                    <td>{{ $infos['member']->username }}</td>
                    <td>{{ $infos['member']->firstname }}</td>
                    <td>{{ $infos['member']->email }}</td>
                    <td>{{ $infos['member']->phone }}</td>
                    <td>{{ $infos['member']->qq_id }}</td>
                    <td>{{ $infos['member']->wechat_id }}</td>
                    <td>{{ $infos['member']->line_id }}</td>
                    <td>{{ $infos['member']->title }}</td>
                    <td>{{ $infos['member']->created_at }}</td>
                    <td>
                        <button type="button" onclick="location.href=' {{ url('/admin/'.$infos['member']->id.'/edit/') }} '">編輯</button>
                        <button type="button" onclick="location.href=' {{ url('/admin/'.$infos['member']->id.'/remove/') }} '">刪除</button>
                    </td>
                </tr>

            @endforeach
        </table>


    @endsection
