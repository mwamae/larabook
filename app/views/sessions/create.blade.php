@extends('layouts.default')

@section('content')

    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h1>Sign In</h1>

            {{Form::open(['route'=>'login_path'])}}
                <!-- Username Form Input -->
                <div class="form-group">
                    {{ Form::label('username', 'Username :') }}
                    {{ Form::text('username', null, ['class' => 'form-control', 'required'=>'required']) }}
                </div>

                <!-- Password Input Field -->
                <div class="form-group">
                    {{Form::label('password', 'Password:' )}}
                    {{Form::password('password',  ['class' => 'form-control', 'required'=>'required'])}}
                </div>

                <div class="form-group">
                    {{Form::submit('Sign In', ['class' => 'btn btn-primary'])}}

                    {{link_to('/password/remind', 'Forgot Password?')}}
                </div>

            {{Form::close()}}
        </div>
    </div>

@stop