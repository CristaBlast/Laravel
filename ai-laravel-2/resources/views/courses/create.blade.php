<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Course</title>
</head>

<body>
    <h2>New Course</h2>
    <form method="POST" action="{{ route('courses.store') }}">
        @csrf
        @include('courses.shared.fields')
        <div>
            <button type="submit" name="ok">Save new course</button>
        </div>
    </form>
</body>

</html>
