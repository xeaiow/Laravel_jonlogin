
    @extends('layout.main')

    @section('content')

        <form action="" method="post">
            {{ csrf_field() }}

            群組名稱：<input type="text" name="title"><br/>

            群組權限值：<input type="number" name="auth"><br/>

            功能：

            @foreach ($func as $funcs)
                <input type="checkbox" name="func{{ $funcs->id }}" value="1"> {{ $funcs->title }}
            @endforeach
            <br />

            <input type="submit" value="確定"><br />
            {{ $errors->first('title') }}<br />
            {{ $errors->first('auth') }}

        </form>

    @endsection
