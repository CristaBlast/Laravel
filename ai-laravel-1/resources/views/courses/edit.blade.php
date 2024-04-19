<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Course</title>
</head>

<body>
    <h2>Update course "{{ $course->name }}"</h2>
    <form method="POST" action="{{ route('courses.update', ['course' => $course]) }}">
        @csrf
        @method('PUT')
        @include('courses.shared.fields')
        <div>
            <button type="submit" name="ok">Save course</button>
        </div>
    </form>
</body>

</html>
