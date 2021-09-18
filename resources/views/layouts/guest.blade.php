<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <x-page-header />
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100 text-gray-900">
            {{ $slot }}
        </div>
    </body>
</html>