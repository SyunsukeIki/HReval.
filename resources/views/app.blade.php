<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>HReval</title>

    <!-- Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Josefin+Sans' rel='stylesheet'>
    <!-- Styles -->
    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }
    </style>
</head>

<body>
    <div id="app"> 
        <my-header/>
    </div>
    @yield('content')
    <script src="{{ mix('js/app.js') }}"></script>   
</body>
</html>