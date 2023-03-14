<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://cdn.tailwindcss.com?plugins=forms"></script>
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/app.css">
    <script src="js/form.js"></script>

    {{-- @vite(['resources/css/app.css', 'resources/js/form.js']) --}}
    <title>IEFP Barlavento</title>
</head>

<body class="min-h-screen px-10 py-32 bg-green-800 ">
    <div class="p-10 mx-auto bg-white md:w-3/4 lg:w-1/2 rounded-2xl">
        <h1>
            Sucesso !
        </h1>
        <p>Inscrito com sucesso na açao de formaçao <strong>{{ $nomeFromacao }}</strong> </p>
    </div>
</body>
<footer>
</footer>

</html>
