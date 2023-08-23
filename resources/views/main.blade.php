<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Events of Your City</title>
</head>
<body>
<div class="flex-col">
    <div>
        @include('header')
    </div>
    <div>
        @include('content')
    </div>
    <div>
        @include('footer')
    </div>
</div>
</body>
</html>
