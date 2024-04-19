<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Courses</title>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>

<body>
    <h1>List of courses</h1>
    <p><a href="{{ route('courses.create') }}">Create a new course</a></p>
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
</body>

</html>
