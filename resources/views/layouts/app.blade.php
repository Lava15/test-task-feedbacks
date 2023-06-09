<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Feedback Form</title>
    @vite(['resources/css/app.css', 'resources/css/bracket.min.css'])

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/imask/6.6.1/imask.min.js"
            integrity="sha512-sDdGivr2tLNeWi/jLYoHWg1CYASC54/Kgl3wqHzBWfPw2tShhl3J4lbxBEeijTeYGhN1zCLcna01yzACiT3gAg=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body class="antialiased">

@yield('content')

</body>
</html>
