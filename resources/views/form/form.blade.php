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
        @include('form.partials.progressBar')
        <div class="p-4 mt-8">

            <form action="/form" enctype="multipart/form-data" method="POST" data-target-form="formulario">
                {{ csrf_field() }}
                @include('form.partials.inicial')
                @include('form.partials.identificacao')
                @include('form.partials.morada')
                @include('form.partials.habilitacoes')
                @include('form.partials.sitProff')
                @include('form.partials.formacao')
                @include('form.partials.final')

                <div class="flex flex-col-reverse sm:flex-row p-2 mt-4">
                    @include('form.partials.previous_btn')
                    @include('form.partials.next_btn')
                    @include('form.partials.submit_btns')
                </div>
            </form>
        </div>
    </div>
</body>
<footer>
    <script>
        initialShow();
    </script>
</footer>

</html>
