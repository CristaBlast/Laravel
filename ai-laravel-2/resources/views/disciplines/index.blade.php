<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Discipline</title>
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
    <h1>List of disciplines</h1>
    <p><a href="{{ route('disciplines.create') }}">Create a new discipline</a></p>
    <table>
        <thead>
            <tr>
                <th>Abbreviation</th>
                <th>Name</th>
                <th>Course</th>
                <th>Year</th>
                <th>Semester</th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($disciplines as $discipline)
                <tr>
                    <td>{{ $discipline->abbreviation }}</td>
                    <td>{{ $discipline->name }}</td>
                    <td>{{ $discipline->course }}</td>
                    <td>{{ $discipline->year }}</td>
                    <td>{{ $discipline->semester }}</td>
                    <td>
                        <a href="{{ route('disciplines.show', ['discipline' => $discipline]) }}">View</a>
                    </td>
                    <td>
                        <a href="{{ route('disciplines.edit', ['discipline' => $discipline]) }}">Update</a>
                    </td>
                    <td>
                        <form method="POST" action="{{ route('disciplines.destroy', ['discipline' => $discipline]) }}">
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
