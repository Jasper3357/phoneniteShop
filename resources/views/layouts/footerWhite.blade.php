<footer class="py-8 site-footer text-mainDark bg-mainWhite">
  <div class="container mx-auto space">
    <div class="flex flex-col items-center">
      <a href="{{ URL::route('home') }}"><img src="{{ asset('media/logo.svg') }}" alt="phonenite logo" class="h-10"></a>
      <p class="font-light">©{{ Carbon\Carbon::now()->year }}</p>
    </div>
    <div class="flex flex-row justify-between pb-4 font-bold -mt-14">
      <a href="" class="hover:underline">Terms Of Service</a>
      <a href="" class="hover:underline">Privacy Policy</a>
    </div>
  </div>
</footer>