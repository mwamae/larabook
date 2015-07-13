@extends('layouts.default')

@section('content')

    @include('layouts.partials.errors')

    <div class="row">

    <div class="col-md-6 col-md-offset-3">

        @include('layouts.partials.publish-status-form')

        @include('statuses.partials.statuses')

    </div>
</div>

@stop