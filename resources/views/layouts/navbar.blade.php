<nav class="fixed z-10 w-full py-3 shadow-lg bg-mainWhite">
  <div class="container mx-auto space">
    <div class="flex flex-row justify-between">
      <div class="flex items-center">
        <a href="{{ URL::route('home') }}" class=""><img src="{{ asset('media/logo.svg') }}" alt="Phonenite logo" class="h-10"></a>
      </div>
      <div class="hidden space-x-6 lg:flex">
        <ul class="flex flex-row">
          <li class="m-4 font-bold uppercase"><a href="" class="p-2 rounded-lg bg-[#363636] transition-opacity ease-in-out bg-opacity-0 hover:bg-opacity-5">Products</a></li>
          <li class="m-4 font-bold uppercase"><a href="" class="p-2 rounded-lg bg-[#363636] transition-opacity ease-in-out bg-opacity-0 hover:bg-opacity-5">PulsarNL</a></li>
          <li class="m-4 font-bold uppercase"><a href="" class="p-2 rounded-lg bg-[#363636] transition-opacity ease-in-out bg-opacity-0 hover:bg-opacity-5">Sale</a></li>
          <li class="m-4 font-bold uppercase"><a href="" class="p-2 rounded-lg bg-[#363636] transition-opacity ease-in-out bg-opacity-0 hover:bg-opacity-5">Contact</a></li>
        </ul>
      </div>
      <div class="flex flex-row items-center gap-2">
        <div class="p-2 cursor-pointer">
          <div class="p-2">
            <img src="{{ asset('media/user.svg') }}" class="h-6 transition-opacity hover:opacity-75" alt="user">
          </div>
          <div class="absolute bg-white rounded-lg translate-x-[-90%] drop-shadow-lg" x-show="open" x-transition x-cloak>
            <div class="px-8 py-6">
              <h2 class="font-bold text-mainDark text-lg">Welcome</h2>
              <p class="font-light text-sm">Log in to use the webshop</p>
              <form action="{{ route('login') }}" method="post" class="mt-6">
                @csrf
                <div class="mb-4">
                  <p class="mb-2 text-sm font-bold text-left">Email</p>
                  <input type="email" name="email" id="email" class="bg-offWhite px-5 py-3 rounded-full @error('email') border-red-500 border-2 @enderror w-80" value="{{ old('email') }}">
                  @error('email')
                    <p class="mt-1 text-sm text-left text-red-500">{{ $message }}</p>
                  @enderror
                </div>
                <div class="mb-4">
                  <p class="mb-2 text-sm font-bold text-left">Password</p>
                  <input type="password" name="password" id="password" class="bg-offWhite px-5 py-3 rounded-full @error('password') border-red-500 border-2 @enderror w-80" value="">
                  @error('password')
                    <p class="mt-1 text-sm text-left text-red-500">{{ $message }}</p>
                  @enderror
                </div>
                <button type="submit" class="w-80 px-4 py-3 mt-4 text-lg font-bold transition-all border-2 rounded-full bg-mainPurple hover:text-mainPurple hover:bg-mainWhite border-mainPurple text-mainWhite">
                  Login
                </button>
              </form>
              <div class="w-full flex justify-center mt-4">
                <div class="flex gap-2 text-sm">
                  <p>Don't have an account yet?</p>
                  <a href="{{ route('register') }}" class="font-bold text-mainPurple hover:underline">Register here</a>
                </div>
              </div>
            </div>
            
          </div>
        </div>
        @auth
        <div class="p-2 cursor-pointer">
          <img src="{{ asset('media/cart.svg') }}" class="h-6 transition-opacity hover:opacity-75" alt="cart">
        </div>
        @endauth
      </div>
      <!-- hamburger nav -->
    </div>
  </div>
</nav>