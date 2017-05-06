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
            <li><a href="{{ url('/admin/groups/create') }}">群組</a></li>
            <li><a href="#">使用者</a></li>
            <li><a href="#">登入清單</a></li>
        </ul>

        @yield('content')

    </body>
</html>
