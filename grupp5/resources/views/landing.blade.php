<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

    <title>Home</title>
</head>

<body>
    @include('layout.navbar')
    <section>
        <h1>Top movies</h1>
        <button class="button-test">BUTTON</button>
    </section>
</body>
@include('layout.footer')

</html>