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
          <img src="{{ asset('media/user.svg') }}" class="h-6 transition-opacity hover:opacity-75" alt="user">
        </div>
        <div class="p-2 cursor-pointer">
          <img src="{{ asset('media/cart.svg') }}" class="h-6 transition-opacity hover:opacity-75" alt="cart">
        </div>
      </div>
      <!-- hamburger nav -->
    </div>
  </div>
</nav>