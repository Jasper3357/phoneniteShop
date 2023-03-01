<nav class="w-full py-3 bg-mainWhite fixed shadow-lg z-10">
  <div class="container mx-auto space">
    <div class="flex flex-row justify-between">
      <div class="flex items-center">
        <a href="{{ URL::route('home') }}" class=""><img src="{{ asset('media/logo.svg') }}" alt="Phonenite logo" class="h-10 hidden sm:block"></a>
        <a href="{{ URL::route('home') }}" class=""><img src="{{ asset('media/icon.svg') }}" alt="Phonenite logo" class="h-10 block sm:hidden"></a>
      </div>
      <div class="hidden space-x-6 lg:flex">
        <ul class="flex flex-row">
          <li class="m-4 font-bold uppercase"><a href="" class="p-2 rounded-lg navhover">Products</a></li>
          <li class="m-4 font-bold uppercase"><a href="" class="p-2 rounded-lg navhover">PulsarNL</a></li>
          <li class="m-4 font-bold uppercase"><a href="" class="p-2 rounded-lg navhover">Sale</a></li>
          <li class="m-4 font-bold uppercase"><a href="" class="p-2 rounded-lg navhover">Contact</a></li>
        </ul>
      </div>
      <div class="flex flex-row items-center gap-2">
        <div class="p-2 cursor-pointer">
          <img src="{{ asset('media/user.svg') }}" class="h-6" alt="user">
        </div>
        <div class="p-2 cursor-pointer">
          <img src="{{ asset('media/cart.svg') }}" class="h-6" alt="cart">
        </div>
      </div>
      <!-- hamburger nav -->
    </div>
  </div>
</nav>