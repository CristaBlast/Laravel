@extends('layout')
@section('header-title', 'List of courses')
@section('main')
    <p>
        <a href="{{ route('courses.create') }}">Create a new course</a>
        </p>
    <table>
        <thead>
            <tr>
                <th>Abbreviation</th>
                <th>Name</th>
                <th>Type</th>
                <th>Nº Semesters</th>
                <th>Nº Places</th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($courses as $course)
                <tr>
                    <td>{{ $course->abbreviation }}</td>
                    <td>{{ $course->name }}</td>
                    <td>{{ $course->type }}</td>
                    <td>{{ $course->semesters }}</td>
                    <td>{{ $course->places }}</td>
                    <td>
                        <a href="{{ route('courses.show', ['course' => $course]) }}">View</a>
                        </td>
                    <td>
                        <a href="{{ route('courses.edit', ['course' => $course]) }}">Update</a>
                    </td>
                    <td>
                        <form method="POST" action="{{ route('courses.destroy', ['course' => $course]) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" name="delete">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
