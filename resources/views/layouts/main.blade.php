<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@section('title') Страница @show</title>
</head>
<body>
    <header>
        @include('blocks.header')
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        <hr>
        <p>This is footer</p>
    </footer>
</body>
</html>