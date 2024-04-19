<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Discipline</title>
</head>
<body>
    <h2>New Discipline</h2>
    <form method="POST" action="{{ route('disciplines.store') }}">
        @csrf
        @include('disciplines.shared.fields')
        <div>
            <button type="submit" name="ok">Save new discipline</button>
        </div>
    </form>
</body>
</html>
