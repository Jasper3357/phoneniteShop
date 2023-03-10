<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Payment Complete - Phonenite</title>
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
    <section class="container space mx-auto">
      <div class="w-full flex justify-center">
        <a href="{{ URL::route('home') }}" class=""><img src="{{ asset('media/logo.svg') }}" alt="Phonenite logo" class="h-10"></a>
      </div>
      <div class="text-center mt-14">
        <h1 class="font-bold text-3xl">Order Completed</h1>
        <p class="font-light text-base">Thank you for ordering!</p>
      </div>
      
      <div class="w-full mt-16 flex justify-center">
        <img src="{{ asset('media/paymentSuccess.svg') }}" class="h-96" alt="phonenite logo">
      </div>
      <div class="flex mt-16 justify-center w-full">
        <div>
          <a href="{{ route('home') }}" class="px-14 py-3 mt-8 text-xl font-bold transition-all border-2 rounded-full w-80 bg-mainPurple hover:text-mainPurple hover:bg-mainWhite border-mainPurple text-mainWhite">< Back to home</a>
        </div>
      </div>
      
    </section>
  </div>
  @vite([
    'resources/js/app.js'
  ])
</body>
</html>