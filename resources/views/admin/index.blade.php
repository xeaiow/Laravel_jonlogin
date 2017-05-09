
@extends('layout.login')

@section('content')

    {{ Form::open(array('url' => 'login')) }}

    <h1>Login</h1>

    @if(Session::has('error'))
        <div class="alert-box success">
            <h2>{{ Session::get('error') }}</h2>
        </div>
    @endif
        <div class="controls">
            {{ Form::text('username','',array('id'=>'','class'=>'form-control span6','placeholder' => '帳號')) }}
            <p class="errors">{{$errors->first('email')}}</p>
        </div>
        <div class="controls">
            {{ Form::password('password',array('class'=>'form-control span6', 'placeholder' => '密碼')) }}
            <p class="errors">{{$errors->first('password')}}</p>
        </div>
        <p>{{ Form::submit('Login', array('class'=>'send-btn')) }}</p>

    {{ Form::close() }}

@endsection
