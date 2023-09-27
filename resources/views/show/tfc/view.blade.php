<!DOCTYPE html>
<html lang="En">
<head>
    <title>@yield('title', $tfc->title)</title>
{{--    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/>--}}
</head>
<body>
        <h1>{{ $tfc->title }}</h1>
        <iframe  src="{{ asset("storage/" . $tfc->file_name) }}#toolbar=0" width="100%" height="500px"> </iframe>
</body>
</html>
