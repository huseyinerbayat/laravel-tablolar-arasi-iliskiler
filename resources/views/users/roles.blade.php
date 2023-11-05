<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <ul>
        @foreach ($users as $user)
            <li>#{{$user->id}} {{$user->name}}</li>
            <ul>
                @foreach ($user->roles as $role)
                    <li>{{$role->name}}</li>
                @endforeach
            </ul>
        @endforeach
    </ul>
</body>
</html>