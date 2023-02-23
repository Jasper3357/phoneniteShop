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
    Brands
  </div>
</section>
<section class="bg-offWhite">
  <div class="container space mx-auto py-12">
    PulsarNL
  </div>
</section>
@endsection