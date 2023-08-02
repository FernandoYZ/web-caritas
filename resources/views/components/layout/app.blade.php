<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{asset('images/logo.ico')}}">
    <link href="{{ asset('css/app.scss') }}" rel="stylesheet">
    <title>Caritas - {{$titulo ?? ''}}</title>
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<x-layout.navbar />
{{$slot}}
<x-layout.footer/>
</body>
</html>
