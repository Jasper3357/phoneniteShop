<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title') - Phonenite</title>
  @vite([
    'resources/css/app.css',
    'resources/css/splide.css',
    ])
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body class="bg-mainWhite text-mainDark font-franklin">
  @include('layouts.navbar')
  @yield('content')
  @include('layouts.footer')
  @vite([
    'resources/js/app.js'
  ])
</body>
</html>