<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Phones</title>
</head>
<body>
    <ul>
        @foreach ($phones as $phone)
            <li>{{$phone->serial_number}} - {{ $phone->user->name }}</li>
        @endforeach
    </ul>
</body>
</html>