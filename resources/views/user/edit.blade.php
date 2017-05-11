
    @extends('layout.main')

    @section('content')

        <form action="" method="post">
            {{ csrf_field() }}
            帳號：<input type="text" name="username" value="{{ $user->username }}"><br/>
            姓名：<input type="text" name="firstname" value="{{ $user->firstname }}"><br/>
            信箱：<input type="text" name="email" value="{{ $user->email }}"><br/>
            手機：<input type="text" name="phone" value="{{ $user->phone }}"><br/>
            QQ：<input type="text" name="qq" value="{{ $user->qq_id }}"><br/>
            微信：<input type="text" name="wechat" value="{{ $user->wechat_id }}"><br/>
            LINE：<input type="text" name="line" value="{{ $user->line_id }}"><br/>
            點數：<input type="text" name="point" value="{{ $user->point }}"><br/>
            <input type="submit" value="確定">
        </form>
        {{ $errors->first('username') }}<br />
        {{ $errors->first('firstname') }}<br />
        {{ $errors->first('email') }}<br />
        {{ $errors->first('phone') }}<br />
        {{ $errors->first('point') }}

    @endsection
