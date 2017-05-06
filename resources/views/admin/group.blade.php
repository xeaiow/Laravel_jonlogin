
    @extends('layout.main')

    @section('content')

        <ul>
                <li><a href="{{ url('admin/groups/create') }}">新增群組</a></li>
            <li><a href="#">功能列表</a></li>
            <li><a href="#">新增功能</a></li>
        </ul>

    @endsection
