@extends('layout.layout')

@section('content')
    <div class="container mt-lg-5">
        @if (session('error'))
            <div class="alert alert-danger text-center">
                {{ session('error') }}
            </div>
        @endif

        <div class="row">
            <div class="col-md-6">
                <h1>Student Information</h1>
                <p><strong>Name:</strong> {{ $student->first_name }} {{ $student->last_name }}</p>
                <p><strong>Birthday:</strong> {{ $student->birthday }}</p>
                <p><strong>Sex:</strong> {{ $student->sex }}</p>
                <p><strong>Program Code:</strong> {{ $student->program->code }}</p>
                <p><strong>Program Level:</strong> {{ $student->year_level }}</p>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-md-6">
                <h2>Enrollment Records</h2>
                @if (count($enrollments) > 0)
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Subject</th>
                                <th>Section</th>
                                <th>Schedule</th>
                                <th>Room</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($enrollments as $enrollment)
                                <tr>
                                    <td>{{ $enrollment->subject }}</td>
                                    <td>{{ $enrollment->section }}</td>
                                    <td>{{ $enrollment->schedule }}</td>
                                    <td>{{ $enrollment->room }}</td>
                                    <td>
                                        <form action="{{ route('enrollment.unenroll', $enrollment->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">Unenroll</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @else
                    <p>No enrollments yet.</p>
                @endif
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-md-6">
                <h2>Available Enrollments</h2>
                @if (count($availableEnrollments) > 0)
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Subject</th>
                                <th>Section</th>
                                <th>Teacher</th>
                                <th>Schedule</th>
                                <th>Room</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($availableEnrollments as $enrollment)
                                <tr>
                                    <td>{{ $enrollment->subject->code }}</td>
                                    <td>{{ $enrollment->section }}</td>
                                    <td>
                                        @if ($enrollment->teacher)
                                            {{ $enrollment->teacher->first_name }} {{ $enrollment->teacher->last_name }}
                                        @else
                                            Unassigned yet
                                        @endif
                                    </td>

                                    <td>{{ $enrollment->schedule }}</td>
                                    <td>{{ $enrollment->room }}</td>
                                    <td>
                                        <form action="{{ route('enrollment.enroll') }}" method="POST">
                                            @csrf
                                            <button type="submit" class="btn btn-sm btn-primary">Enroll</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @else
                    <p>No available enrollments for the student's program and year level.</p>
                @endif
            </div>
        </div>
    </div>
@endsection
