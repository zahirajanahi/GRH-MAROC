<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Solutions RH innovantes') }}</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Montserrat:wght@600;700;800&display=swap" rel="stylesheet">
    
    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased text-gray-900 bg-white">
    @include('layouts.navbar')
    
    <div class="pt-20 min-h-screen flex flex-col">
        @yield('content')
    </div>
    
    @include('layouts.footer')
    
    <script>
        // Simple filter functionality (would need to be implemented properly)
        document.addEventListener('DOMContentLoaded', function() {
            const filterSelects = document.querySelectorAll('select');
            
            filterSelects.forEach(select => {
                select.addEventListener('change', function() {
                    // In a real implementation, this would filter the job offers
                    console.log(`Filter changed: ${this.id} = ${this.value}`);
                });
            });
        });
    </script>
</body>
</html>