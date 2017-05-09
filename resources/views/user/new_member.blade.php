
    @extends('layout.main')

    @section('content')

        <form action="" method="post">
            {{ csrf_field() }}
            帳號：<input type="text" name="username"><br/>
            密碼：<input type="text" name="password"><br/>
            姓名：<input type="text" name="firstname"><br/>
            信箱：<input type="text" name="email"><br/>
            手機：<input type="text" name="phone"><br/>
            QQ：<input type="text" name="qq"><br/>
            微信：<input type="text" name="wechat"><br/>
            LINE：<input type="text" name="line"><br/>
            點數：<input type="text" name="point"><br/>
            <input type="submit" value="確定">
        </form>

    @endsection
