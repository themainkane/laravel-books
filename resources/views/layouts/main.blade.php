<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     @vite('resources/css/app.scss')
    <title>Document</title>
</head>
<body>
    <body>

    @yield('content')

    <div id= "partners"> </div>

    <div id="latest-books">
        <div id="loader" class="rotate">
            <img id="cat" src="./cat.png" alt="rotating cat" />
    </div>
    @viteReactRefresh
    @vite('resources/js/partners.jsx')

    @vite('resources/js/latest-books.js')
</body>
</html>