@extends('layouts.head')

@section('title')Home @endsection

@section('content')
@php
  $brands = ["apple", "samsung", "huawei", "google", "xiaomi", "oneplus", "motorola", "microsoft", "oppo", "honor"];
@endphp
<section class="homebg text-mainWhite">
  <div class="container py-16 mx-auto space">
    <div class="flex flex-row items-center justify-between gap-2">
      <div class="max-w-[50%] flex flex-col gap-16">
        <h1 class="w-3/4 text-5xl font-bold">The New PulsarNL Collection is Here!</h1>
        <a href="" class="w-1/3 py-2 text-lg font-bold text-center transition-colors ease-in-out rounded-full bg-mainPurple hover:bg-altPurple">Check it Out</a>
      </div>
      <div class="max-w-[50%]">
        <img src="{{ asset('media/products/cable-usbc-usba.png') }}" class="h-[400px]" alt="PulsarNL usb-c to usb-a cable">
      </div>
    </div>
  </div>
</section>
<section class="bg-mainWhite">
  <div class="container py-12 mx-auto space">
    <h3 class="mb-8 text-xl font-bold">Check out our brands</h3>
    <div class="splide" role="group" aria-label="Splide Basic HTML Example">
      <div class="splide__track">
        <ul class="text-center splide__list">
          @foreach ($brands as $brand)
            @php $img = $brand.'.png' @endphp
            <li class="flex items-center justify-center h-32 splide__slide bg-offWhite rounded-xl"><img src="{{ asset('media/brands/'. $img) }}" alt="{{$brand}}" class="h-full"></li>
          @endforeach
        </ul>
      </div>
    </div>
  </div>
</section>
<section class="bg-offWhite">
  <div class="container py-12 mx-auto space">
    <div class="flex flex-row justify-between">
      <h3 class="text-xl font-bold text-mainPurple">PulsarNL</h3>
      <a href="p-6" class="">View all ></a>
    </div>
    
  </div>
</section>
@endsection