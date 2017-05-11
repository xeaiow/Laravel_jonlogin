<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>jon</title>
    </head>
    <body>

        <ul>
            <li><a href="{{ url('/admin/create') }}">新增管理員</a></li>
            <li><a href="{{ url('/admin/lists') }}">管理員列表</a></li>
            <li><a href="{{ url('/admin/groups/lists') }}">群組列表</a></li>
            <li><a href="{{ url('/admin/groups/create') }}">新增群組</a></li>
            <li><a href="{{ url('/user/create') }}">新增使用者</a></li>
            <li><a href="{{ url('/user/lists') }}">使用者列表</a></li>
            <li><a href="{{ url('/admin/record') }}">登入清單</a></li>
            <li><a href="{{ url('/logout') }}">登出</a></li>
        </ul>

        @yield('content')

    </body>
</html>
