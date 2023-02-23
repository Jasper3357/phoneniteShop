@extends('layouts.head')

@section('title')Home @endsection

@section('content')
<section class="homebg text-mainWhite">
  <div class="container space mx-auto py-16">
    <div class="flex flex-row justify-between items-center gap-2">
      <div class="max-w-[50%] flex flex-col gap-16">
        <h1 class="font-bold text-5xl w-3/4">The New PulsarNL Collection is Here!</h1>
        <a href="" class="py-2 bg-mainPurple hover:bg-altPurple transition-colors ease-in-out rounded-full w-1/3 text-center font-bold text-lg">Check it Out</a>
      </div>
      <div class="max-w-[50%]">
        <img src="{{ asset('media/products/cable-usbc-usba.png') }}" class="h-[400px]" alt="PulsarNL usb-c to usb-a cable">
      </div>
    </div>
  </div>
</section>
<section class="bg-mainWhite">
  <div class="container space mx-auto py-12">
    <h3 class="font-bold text-xl">Check out our brands</h3>
    <div class="splide" role="group" aria-label="Splide Basic HTML Example">
      <div class="splide__track">
        <ul class="splide__list">
          <li class="splide__slide p-6 bg-offWhite">Apple</li>
          <li class="splide__slide p-6 bg-offWhite">Samsung</li>
          <li class="splide__slide p-6 bg-offWhite">Huawei</li>
          <li class="splide__slide p-6 bg-offWhite">Google</li>
          <li class="splide__slide p-6 bg-offWhite">Xiaomi</li>
          <li class="splide__slide p-6 bg-offWhite">OnePlus</li>
          <li class="splide__slide p-6 bg-offWhite">Microsoft</li>
        </ul>
      </div>
    </div>
  </div>
</section>
<section class="bg-offWhite">
  <div class="container space mx-auto py-12">
    PulsarNL
  </div>
</section>
@endsection