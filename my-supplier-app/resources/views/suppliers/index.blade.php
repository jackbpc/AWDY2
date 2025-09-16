<!DOCTYPE html>
<html lang="en">
    <head><title>Suppliers</title></head>
    <body>
        <h1>All suppliers</h1>
        <ul>
            @foreach ($suppliers as $supplier)
                <li>{{ $supplier->name }}: {{ $supplier->address }}</li>
            @endforeach
        </ul>
</body>
</html>