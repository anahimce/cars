<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Car's list</title>
</head>
<body>
    <ul>
        @foreach ($cars as $car)
        <li>{{$car->title}}</li>
        @endforeach  
    </ul>
    
</body>
</html>