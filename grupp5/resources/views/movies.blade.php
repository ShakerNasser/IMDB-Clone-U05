<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Movies List</title>
    <!-- Add any additional head content here -->
</head>
<body>
    <h1>Movies</h1>
    <ul>
        @foreach ($titles as $title)
            <li>
                <strong>{{ $title->name }}</strong> 
                <!-- Display additional information here -->
            </li>
        @endforeach
    </ul>
</body>
</html>