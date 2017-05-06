
    @extends('layout.main')

    @section('content')

        <ul>
            <li><a href="{{ url('admin/groups/create') }}">新增群組</a></li>
            <li><a href="{{ url('admin/groups/lists') }}">群組列表</a></li>
        </ul>

        <table border="1">
            <tr>
                <th>id</th>
                <th>群組名稱</th>
                <th>權限值</th>
                <th>使用者管理</th>
                <th>玩家使用者管理</th>
                <th>遊戲伺服器設定</th>
                <th>防火牆管理</th>
                <th>財務報表</th>
                <th>伺服器授權管理</th>
                <th>編輯</th>
            </tr>
            @foreach ($group as $groups)

                <tr>
                    <td>{{ $groups->id }}</td>
                    <td>{{ $groups->title }}</td>
                    <td>{{ $groups->auth }}</td>
                    <td>{{ ( $groups->manager == '1' ) ? '✔':'' }}</td>
                    <td>{{ ( $groups->member == '1' ) ? '✔':'' }}</td>
                    <td>{{ ( $groups->game_server == '1' ) ? '✔':'' }}</td>
                    <td>{{ ( $groups->firewall == '1' ) ? '✔':'' }}</td>
                    <td>{{ ( $groups->finance == '1' ) ? '✔':'' }}</td>
                    <td>{{ ( $groups->server_auth == '1' ) ? '✔':'' }}</td>
                    <td>
                        <button type="button" onclick="location.href=' {{ url('/admin/groups/'.$groups->id.'/edit/') }} '">編輯</button>
                        <button type="button" onclick="location.href=' {{ url('/admin/groups/'.$groups->id.'/remove/') }} '">刪除</button>
                    </td>
                </tr>

            @endforeach
        </table>


    @endsection
