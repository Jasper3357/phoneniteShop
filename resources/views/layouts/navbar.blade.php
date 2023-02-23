<nav class="w-full py-3 bg-white">
  <div class="container mx-auto space">
    <div class="flex flex-row justify-between">
      <div class="flex items-center">
        <a href="{{ URL::route('home') }}" class=""><img src="{{ asset('media/logo.svg') }}" alt="Phonenite logo" class="h-10"></a>
      </div>
      <div class="hidden space-x-6 lg:flex">
        <ul class="flex flex-row">
          <li class="m-4 font-bold uppercase"><a href="" class="p-2 rounded-lg navhover">Products</a></li>
          <li class="m-4 font-bold uppercase"><a href="" class="p-2 rounded-lg navhover">PulsarNL</a></li>
          <li class="m-4 font-bold uppercase"><a href="" class="p-2 rounded-lg navhover">Sale</a></li>
          <li class="m-4 font-bold uppercase"><a href="" class="p-2 rounded-lg navhover">Contact</a></li>
        </ul>
      </div>
      <div>
        account/winkelwagen
      </div>
      <!-- hamburger nav -->
    </div>
  </div>
</nav>