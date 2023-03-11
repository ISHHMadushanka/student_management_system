@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Student</h1>
    {!! Form::model($student, ['route' => ['students.update', $student->id], 'method' => 'PUT']) !!}
        <div class="form-group">
            {!! Form::label('name', 'Name') !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('email', 'Email') !!}
            {!! Form::email('email', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('password', 'Password') !!}
            {!! Form::password('password', ['class' => 'form-control']) !!}
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    {!! Form::close() !!}
</div>
@endsection
