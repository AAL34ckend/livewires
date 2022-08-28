<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ferry Dermawan</title>
    {{--  Bootstrap  --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    @stack('css')
    @livewireStyles
</head>
<body>
    <main class="container py-5">
        <h1>Laravel Livewire</h1>
        <hr>
        @yield('content')
    </main>

    @livewireScripts
    @stack('js')
</body>
</html>
