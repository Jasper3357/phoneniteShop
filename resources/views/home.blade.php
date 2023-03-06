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
        <img src="{{ asset('media/products/cable-usbc-usba.png') }}" class="h-[400px] drop-shadow-xl" alt="PulsarNL usb-c to usb-a cable">
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
<section class="pb-6 bg-offWhite">
  <div class="container py-12 mx-auto space">
    <div class="flex flex-row justify-between">
      <h3 class="text-xl font-bold text-mainPurple">PulsarNL</h3>
      <a href="p-6" class="hover:underline">View all ></a>
    </div>
    <div class="flex flex-col justify-around gap-[3vw] mt-6 lg:flex-row">
      <div class="flex flex-col gap-[3vw] sm:flex-row w-[47%] justify-between">
        <div class="w-[45%] gap-16 px-8 py-6 bg-white rounded-xl flex justify-between items-center flex-col">
          <img src="{{ asset('media/pulsarnl/home1.png') }}" alt="" class="-mb-8 w-28 aspect-auto">
          <p class="font-semibold text-center">Cables</p>
        </div>
        <div class="w-[45%] gap-16 px-8 py-6 bg-white rounded-xl flex justify-between items-center flex-col">
          <img src="{{ asset('media/pulsarnl/home2.png') }}" alt="" class="-mb-8 mt-7 w-28 aspect-auto">
          <p class="font-semibold text-center">Chargers</p>
        </div>
      </div>
      <div class="flex flex-col gap-[3vw] sm:flex-row w-[47%] justify-between">
        <div class="w-[45%] gap-16 px-8 py-6 bg-white rounded-xl flex justify-between items-center flex-col">
          <img src="{{ asset('media/pulsarnl/home3.png') }}" alt="" class="w-24 -mb-8 mt-7 aspect-auto">
          <p class="font-semibold text-center">Tempered Glass</p>
        </div>
        <div class="w-[45%] gap-16 px-8 py-6 bg-white rounded-xl flex justify-between items-center flex-col">
          <img src="{{ asset('media/pulsarnl/home4.png') }}" alt="" class="mt-10 -mb-8 w-36 aspect-auto">
          <p class="font-semibold text-center">Cases</p>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection