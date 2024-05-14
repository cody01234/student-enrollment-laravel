@extends('layout.layout')

@section('content')
    <div class="container mt-lg-5">
        <h1 class="text-center">Programs</h1>

        @if (count($programs) > 0)
            <div class="mx-lg-5">
                <table class="table table-striped mx-auto my-3"">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Code</th>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($programs as $program)
                            <tr>
                                <td>{{ $program->id }}</td>
                                <td>{{ $program->code }}</td>
                                <td>{{ $program->name }}</td>

                                <td>
                                    <a href="{{ route('program.edit', $program->id) }}"
                                        class="btn btn-sm btn-primary">Edit</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <p class="text-center">No programs yet.</p>
        @endif
        <div class="d-flex justify-content-center">
            <a href="{{ route('program.create') }}" class="btn btn-primary">Add program</a>
        </div>
    </div>
    </div>
@endsection
