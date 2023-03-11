@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Marks</div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Student Name</th>
                                            <th>Subject</th>
                                            <th>Mark</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($marks as $mark)
                                            <tr>
                                                <td>{{ $mark->student->name }}</td>
                                                <td>{{ $mark->subject->name }}</td>
                                                <td>{{ $mark->mark }}</td>
                                                <td>
                                                    <a href="{{ route('marks.edit', $mark->id) }}" class="btn btn-primary">Edit</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
