extends('layouts.master')

@section('content')

{!! Form::open(['url' => '/admin']) !!}
    <div class="form-group">
        {!! Form::label('email', 'Email Id:') !!}
        {!! Form::text('email', null, ['class' => 'form-control input-sm']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('password', 'Password') !!}
        {!! Form::password('password', ['class' => 'form-control input-sm']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Login', ['class' => 'btn btn-primary btn-block']) !!}
    </div>
{!! Form::close() !!}


@endsection
