<!DOCTYPE html>
<html lang="en">
    <head><title>Plants</title></head>
    <body>
        <h1>All plants</h1>
        <ul>
            @foreach ($plants as $plant)
                <li>{{ $plant->name }}: {{ $plant->description }}</li>
            @endforeach
        </ul>   
</body>
</html>