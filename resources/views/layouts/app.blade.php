<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <link href="http://localhost/crud/bootstrap/bootstrap-4.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- Font Awesome -->
        <!--link href="vendor/font-awesome/css/all.min.css" rel="stylesheet"-->
        <script src="https://kit.fontawesome.com/fd08119723.js" crossorigin="anonymous"></script>
   
       <!-- Custom styles for this template -->
       <link href="http://localhost/bootstrap/bootstrap-4.1.3/site/docs/4.1/examples/carousel/carousel.css" rel="stylesheet">
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
          @include('layouts.footer')
        </div>
    </body>
</html>
