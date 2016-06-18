@extends('layouts.app')

@section('content')




{{ Form::open(array('url' => 'pages.book')) }}

    {{ Form::label('first_name', 'First Name') }}
    {{ Form::text('first_name', 'Taylor Otwell') }}

{{ Form::close() }}






@endsection
