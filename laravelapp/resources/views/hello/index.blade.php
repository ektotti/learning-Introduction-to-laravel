<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{font-size:16pt; color:#999;}
        h1{font-size:100pt; text-align:right; color:#eee; margin:-40px 0px -50px 0px;}
    </style>
</head>
<body>
    <h1>Blade/Index</h1>
    @foreach($fruits as $fruit)
    @if($loop->iteration == 2)
        @continue
    @endif
    <div>No,{{$loop->iteration}}:{{$fruit}}</div>
    @endforeach
</body>
</html>