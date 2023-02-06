<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com?plugins=forms"></script>
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="css/app.css" rel="stylesheet">
    <script src="js/app.js"></script>
    <title>IEFP Barlavento</title>
</head>

<body class=" bg-green-800 py-32 px-10 min-h-screen ">
    <div class=" bg-white p-10 md:w-3/4 lg:w-1/2 mx-auto rounded-2xl">
        @include('form.partials.progressBar')
        <div class="mt-8 p-4">
            
            <form action="" enctype="multipart/form-data"  method="POST">
                {{csrf_field()}}
                @include('form.partials.inicial')
                @include('form.partials.identificacao')
                @include('form.partials.morada')
                @include('form.partials.habilitacoes')
                @include('form.partials.sitProff')
                @include('form.partials.formacao')
                @include('form.partials.final')
                
                <div class="flex p-2 mt-4">
                    @include('form.partials.previous_btn')
                    @include('form.partials.next_btn')
                </div>
            </form>
        </div>
    </div>
</body>
<footer>
    <script>initialShow()</script>
</footer>
</html>