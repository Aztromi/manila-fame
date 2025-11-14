<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Manila FAME</title>
    @vite('resources/js/register.js')
</head>

<body>
    <div id="register">
        <script type="module" src="{{ mix('js/register.js') }}"></script>
    </div>
</body>


</html>