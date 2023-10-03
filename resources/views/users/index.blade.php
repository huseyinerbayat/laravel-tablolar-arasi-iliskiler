<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Users</title>
</head>
<body>
    <ul>
        @foreach ($users as $user)
            <li>{{$user->name}} - {{ $user->phone->brand }} / {{ $user->phone->serial_number }}</li>
            <p>{{ $user->latestPost->id }} - {{ $user->latestPost->title }}</p>
            <p>{{ $user->oldestPost->id }} - {{ $user->oldestPost->title }}</p>
        @endforeach
    </ul>
</body>
</html>