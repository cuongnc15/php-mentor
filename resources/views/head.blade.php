<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Cache-Control" content="no-cache">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="base-url" content="{{ url('/') }}">


    <title>Mentor</title>

    <!-- Fonts -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@300;400;500;600&display=swap"
        rel="stylesheet">

    {{-- Fontawsome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        * {
            font-family: 'Lexend Deca', sans-serif;
        }

        body {
            overflow-x: hidden;
        }
    </style>
    @vite('resources/css/app.css')
    <script src="{{ asset('js/jQuery.min.js') }}"></script>
    <link href="{{ asset('css/select2.min.css') }}" rel="stylesheet" />
    <script src="{{ asset('js/select2.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
