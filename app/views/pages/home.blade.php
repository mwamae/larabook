@extends('layouts.default')

@section('content')

    <div class="jumbotron">

        <h1>Welcome to Larabook!</h1>

        <p>Welcome to a place to talk about Laravel with friends and know what the fuss Laravel is all about</p>

        @if( ! $currentUser)
            <p>
                {{ link_to_route('register_path', 'Sign Up!',null, ['class'=>'btn btn-lg btn-primary'])}}

            </p>

        @endif

    </div>

@stop
