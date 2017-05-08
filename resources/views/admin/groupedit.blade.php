
    @extends('layout.main')

    @section('content')

        <ul>
            <li><a href="{{ url('admin/groups/create') }}">新增群組</a></li>
            <li><a href="{{ url('admin/groups/lists') }}">群組列表</a></li>
        </ul>

        <form action="" method="post">
            {{ csrf_field() }}

            群組名稱：<input type="text" name="title" value="{{ $group->title }}"><br/>

            功能：

            <input type="checkbox" name="manager" value="1" {{ ( $group->manager == '1' ) ? 'checked':'' }}> {{ $func[0]->title }}
            <input type="checkbox" name="member" value="1" {{ ( $group->member == '1' ) ? 'checked':'' }}> {{ $func[1]->title }}
            <input type="checkbox" name="game_server" value="1" {{ ( $group->game_server == '1' ) ? 'checked':'' }}> {{ $func[2]->title }}
            <input type="checkbox" name="firewall" value="1" {{ ( $group->firewall == '1' ) ? 'checked':'' }}> {{ $func[3]->title }}
            <input type="checkbox" name="finance" value="1" {{ ( $group->finance == '1' ) ? 'checked':'' }}> {{ $func[4]->title }}
            <input type="checkbox" name="server_auth" value="1" {{ ( $group->server_auth == '1' ) ? 'checked':'' }}> {{ $func[5]->title }}

            <br />

            <input type="submit" value="確定"><br />
            {{ $errors->first('title') }}

        </form>


    @endsection
