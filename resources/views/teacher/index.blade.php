@extends('layout.layout')

@section('content')
    <div class="container mt-lg-5">
        <h1 class="text-center">Teachers</h1>

        @if (count($teachers) > 0)
            <div class="mx-lg-5">
                <table class="table table-striped mx-auto my-3"">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Sex</th>
                            <th>Birthday</th>
                            <th>Program Assigned</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($teachers as $teacher)
                            <tr>
                                <td>{{ $teacher->id }}</td>
                                <td>{{ $teacher->first_name }} {{ $teacher->last_name }}</td>
                                <td>{{ $teacher->email }}</td>
                                <td>{{ $teacher->sex }}</td>
                                <td>{{ $teacher->birthday }}</td>
                                <td>{{ $teacher->program->code }}</td>
                                <td>
                                    <a href="{{ route('teacher.edit', $teacher->id) }}"
                                        class="btn btn-sm btn-primary">Edit</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <p class="text-center">No teachers yet.</p>
        @endif
        <div class="d-flex justify-content-center">
            <a href="{{ route('teacher.create') }}" class="btn btn-primary">Add teacher</a>
        </div>
    </div>
    </div>
@endsection
