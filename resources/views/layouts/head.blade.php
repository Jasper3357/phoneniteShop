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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
</head>
<body class="bg-mainWhite text-mainDark font-franklin">
  <div class="page-wrap">
    @include('layouts.navbar')
    @yield('content')
  </div>
  @include('layouts.footer')
  @vite([
    'resources/js/app.js'
  ])
  @yield('scripts')
</body>
</html>