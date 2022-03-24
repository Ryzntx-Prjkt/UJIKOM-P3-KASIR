<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') &mdash; Aplikasi Kasir Kafe</title>

    @include('layouts.includes.styles')
</head>

<body>
    <div id="app">
        @include('layouts.includes.sidebar')
        <div id="main">
            <header class="mb-3">
               @include('layouts.includes.navbar')
            </header>

            @yield('content')

            @include('layouts.includes.footer')
        </div>
    </div>
    @include('layouts.includes.script')
    @include('sweetalert::alert')
    @stack('addon-script')
</body>

</html>
