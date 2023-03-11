@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Students</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $student)
                <tr>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->email }}</td>
                    <td>
                        <a href="{{ route('students.show', $student->id) }}" class="btn btn-info">View</a>
                        <a href="{{ route('students.edit', $student->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('students.destroy', $student->id) }}" method="POST" style="display: inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('students.create') }}" class="btn btn-success">Add Student</a>
</div>
@endsection
