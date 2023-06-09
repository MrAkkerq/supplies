<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    
    <title>Welcome</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/blog/">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        
    <link href={{ mix("/css/app.css") }} rel="stylesheet">

    <script src={{ mix("/js/vendor.js") }}></script>
    <script src={{ mix("/js/app.js") }}></script>
</head>
<body>
    @include('layout.nav')
    @yield('content')
</body>
</html>