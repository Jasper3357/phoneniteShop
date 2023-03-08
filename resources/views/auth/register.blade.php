<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register - Phonenite</title>
    @vite([
      'resources/css/app.css',
      'resources/css/splide.css',
      ])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  </head>
  <body>
    <section class="text-mainDark">
      <div class="flex flex-row w-[100vw] h-[100vh]">
        <div class="md:w-[50%] w-full bg-white">
          <div class="flex flex-col justify-center w-full h-full">
            <div class="flex justify-center">
              <a href="{{ URL::route('home') }}">
                <img src="{{ asset('media/logo.svg') }}" alt="Phonenite logo" class="h-10 mt-6">
              </a>
            </div>
            <div class="container flex items-center justify-center h-full mx-auto space">
              <form class="w-full -mt-12 text-center sm:w-3/4 lg:w-2/3 xl:w-1/2" action="{{ route('register') }}" method="post">
                @csrf
                <h1 class="text-4xl font-bold text-mainDark">Register</h1>
                <h3 class="mt-2 mb-10">Create your account right here</h3>
                <div class="mb-4">
                  <p class="mb-2 text-sm font-bold text-left">Name</p>
                  <input type="text" name="name" id="name" class="bg-offWhite px-5 py-3 rounded-full @error('name') border-red-500 border-2 @enderror w-full" value="{{ old('name') }}">
                  @error('name')
                    <p class="mt-1 text-sm text-left text-red-500">{{ $message }}</p>
                  @enderror
                </div>
                <div class="mb-4">
                  <p class="mb-2 text-sm font-bold text-left">Email</p>
                  <input type="email" name="email" id="email" class="bg-offWhite px-5 py-3 rounded-full @error('email') border-red-500 border-2 @enderror w-full" value="{{ old('email') }}">
                  @error('email')
                    <p class="mt-1 text-sm text-left text-red-500">{{ $message }}</p>
                  @enderror
                </div>
                <div class="mb-4">
                  <p class="mb-2 text-sm font-bold text-left">Password</p>
                  <input type="password" name="password" id="password" class="bg-offWhite px-5 py-3 rounded-full @error('password') border-red-500 border-2 @enderror w-full" value="">
                  @error('password')
                    <p class="mt-1 text-sm text-left text-red-500">{{ $message }}</p>
                  @enderror
                </div>
                <div class="mb-4">
                  <p class="mb-2 text-sm font-bold text-left">Repeat password</p>
                  <input type="password" name="password_confirmation" id="password" class="w-full px-5 py-3 rounded-full bg-offWhite" value="">
                </div>
                <button type="submit" class="w-2/3 px-4 py-3 mt-4 text-xl font-bold transition-all border-2 rounded-full bg-mainPurple hover:text-mainPurple hover:bg-mainWhite border-mainPurple text-mainWhite">
                  Register
                </button>
                <div class="flex flex-row w-full justify-center gap-2 mt-3">
                  <p>Already have an account?</p>
                  <a href="{{ route('login') }}" class="font-bold text-mainPurple hover:underline">Log in</a>
                </div>
              </form>
              
            </div>
          </div>
        </div>
        <div class="hidden md:block w-[50%] bg-mainDark shadow-inner">
          <img src="{{ asset('media/auth/register.png') }}" class="h-[100vh] object-cover object-left shadow-inner">
        </div>
      </div>
    </section>
    @vite([
      'resources/js/app.js'
    ])
  </body>
</html>