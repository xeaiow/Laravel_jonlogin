
    @extends('layout.main')

    @section('content')

        <form action="" method="post">
            {{ csrf_field() }}
            帳號：<input type="text" name="username" value="{{ $info['member']->username }}"><br/>
            密碼：<input type="text" name="password" value="{{ $info['member']->password }}"><br/>
            姓名：<input type="text" name="firstname" value="{{ $info['member']->firstname }}"><br/>
            信箱：<input type="text" name="email" value="{{ $info['member']->email }}"><br/>
            手機：<input type="text" name="phone" value="{{ $info['member']->phone }}"><br/>
            QQ：<input type="text" name="qq" value="{{ $info['member']->qq_id }}"><br/>
            微信：<input type="text" name="wechat" value="{{ $info['member']->wechat_id }}"><br/>
            LINE：<input type="text" name="line" value="{{ $info['member']->line_id }}"><br/>
            群組：
            <select name="group">
                @foreach ($info['group'] as $infos['group'])

                    <option value="{{ $infos['group']->auth }}" {{ ( $info['member']->group == $infos['group']->auth  ? 'selected' : '' )}}>{{ $infos['group']->title }}</option>

                @endforeach
            </select><br />
            <input type="submit" value="確定">
        </form>





    @endsection
