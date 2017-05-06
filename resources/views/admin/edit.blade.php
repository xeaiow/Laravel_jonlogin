
    @extends('layout.main')

    @section('content')

        <form action="" method="post">
            {{ csrf_field() }}
            帳號：<input type="text" name="username" value="{{ $info->username }}"><br/>
            密碼：<input type="text" name="password" value="{{ $info->password }}"><br/>
            姓名：<input type="text" name="firstname" value="{{ $info->firstname }}"><br/>
            信箱：<input type="text" name="email" value="{{ $info->email }}"><br/>
            手機：<input type="text" name="phone" value="{{ $info->phone }}"><br/>
            QQ：<input type="text" name="qq" value="{{ $info->qq_id }}"><br/>
            微信：<input type="text" name="wechat" value="{{ $info->wechat_id }}"><br/>
            LINE：<input type="text" name="line" value="{{ $info->line_id }}"><br/>
            群組：<input type="text" name="group" value="{{ $info->group }}"><br/>
            <input type="submit" value="確定">
        </form>

    @endsection
