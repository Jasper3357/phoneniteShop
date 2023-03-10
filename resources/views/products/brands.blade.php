@extends('layouts.head')

@section('title'){{ $brand }} @endsection

@section('content')
<section class="pt-[80px] bg-mainWhite">
  <div class="container mx-auto space">
    <div class="mt-12 text-center capitalize">
        <h1 class="text-3xl font-bold @if($brand == 'pulsarnl') text-mainPurple @else text-mainDark @endif">{{ $brand }}</h1>
        <h3 class="mb-10 font-light">Check out all our {{ $brand }} products</h3>
    </div>
    <div class="flex flex-row flex-wrap justify-between gap-x-2 gap-y-10">
      @foreach ($products as $product)
        <div class="flex flex-col flex-wrap p-5 bg-offWhite rounded-2xl basis-64">
          <div class="flex items-center justify-center rounded-lg bg-mainWhite">
            <img src="{{ url('storage/product/'.$product->file_path) }}" class=" max-w-[60%] max-h-[85%]">
          </div>
          <div class="flex justify-center w-full">
            <img src="{{ asset('media/brands/'. $product->brand . '.png') }}" class=" max-w-[85%] max-h-[85%] -mt-2">
          </div>
          <div class="-mt-10 text-center">
            <p>{{ $product->name }}</p>
          </div>
          <div class="flex flex-row justify-between pt-5 mt-auto">
            <div class="flex items-center gap-2" x-data="{ open: false }">
              @auth
                @if ( $product->stock > 0)
                  <img src="{{ asset('media/check.svg') }}" class="h-4" alt="Product in stock"  @mouseover="open = true">
                  <div class="absolute p-2 bg-white rounded-lg shadow-md" x-show="open" x-cloak x-transition @mouseleave="open = false">
                    <p>In stock</p>
                  </div>
                @else 
                  <img src="{{ asset('media/error.svg') }}" class="h-4" alt="Product not in stock" @mouseover="open = true">
                  <div class="absolute p-2 bg-white rounded-lg shadow-md" x-show="open" x-cloak x-transition @mouseleave="open = false">
                    <p>Not in stock</p>
                  </div>
                @endif
                <x-money amount="{{ $product->price }}" currency="EUR" />
              @else
              <img src="{{ asset('media/question.svg') }}" class="h-4" alt="Product in stock"  @mouseover="open = true">
              <div class="absolute p-2 bg-white rounded-lg shadow-md" x-show="open" x-cloak x-transition @mouseleave="open = false">
                <p>Log in to see prices</p>
              </div>
              <p>--.--</p>
              @endauth
              
              
            </div>
            <form action="{{ route('addToCart', ['id'=>$product->id]) }}">
              <button class="px-4 py-2 rounded-lg @auth @if ( $product->stock > 0) bg-mainPurple button" @else bg-gray-400" disabled @endif @else bg-gray-400" disabled @endguest>
                <img src="{{ asset('media/cartWhite.svg') }}" class="h-5" alt="add to cart">
              </button>
            </form>
            
          </div>
        </div>
      @endforeach
    </div>
  </div>
  
  
</section>
@endsection