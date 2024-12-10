<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="dark:bg-neutral-800">

    @extends('layouts.header')
    @section('content')
        @yield('content')
    @endsection
    @apexchartsScripts
    <script>
        @if (session('message'))
            SwalWithTailwind.fire({
                title: 'Success!',
                text: '{{ session('message') }}',
                icon: 'success',
                confirmButtonText: 'OK'
            });
        @endif
    </script>
</body>

</html>
