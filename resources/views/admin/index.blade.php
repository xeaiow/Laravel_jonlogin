
@extends('layout.login')

@section('content')

    {{ Form::open(array('url' => 'login')) }}

    <h1>Login</h1>

    @if(Session::has('error'))
        <div>
            <h2>{{ Session::get('error') }}</h2>
        </div>
    @endif
    
        <div>
            {{ Form::text('username','',array('id'=>'','class'=>'form-control span6','placeholder' => '帳號')) }}
        </div>
        <div>
            {{ Form::password('password',array('class'=>'form-control span6', 'placeholder' => '密碼')) }}
        </div>
        <p>{{ Form::submit('Login', array('class'=>'send-btn')) }}</p>

    {{ Form::close() }}

@endsection
