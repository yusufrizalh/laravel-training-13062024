<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inixindo | {{ $title }}</title>
    {{-- mengakses file css secara eksternal --}}
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    @yield('style')

    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.css" />
</head>

<body>
    {{-- @include('/layout/navbar') --}}
    <x-navbar />
    <div class="mt-5 mb-5 px-5">
        @yield('content')
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    @stack('scripts')
</body>

</html>
