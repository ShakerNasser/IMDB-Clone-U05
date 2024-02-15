<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('nav_footer/style.css') }}">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

    <title>Home</title>
</head>

<body>
    @include('layout.navbar')
    <section>
        <h1>Top movies</h1>
    </section>
</body>
@include('layout.footer')

</html>