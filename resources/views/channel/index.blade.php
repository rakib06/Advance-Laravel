<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Channels</title>
</head>
<body>
    <ul>
    @foreach(@channels as $channel )
        <li>{{$channel->name }}</li>
    </ul>
</body>
</html>