@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Add Student</h1>
   {!! Form::open(['route' => 'students.create', 'method' => 'POST']) !!}
        <div class="form-group">
            {!! Form::label('name', 'Name') !!}
            {!! Form::text('name', null, ['class' => 'form-control', 'required' => true]) !!}
        </div>
        <div class="form-group">
            {!! Form::label('email', 'Email') !!}
            {!! Form::email('email', null, ['class' => 'form-control', 'required' => true]) !!}
        </div>
        <div class="form-group">
            {!! Form::label('password', 'Password') !!}
            {!! Form::password('password', ['class' => 'form-control', 'required' => true]) !!}
        </div> <br>
        <button type="submit" class="btn btn-success">Save</button>
    {!! Form::close() !!}
</div>
@endsection
