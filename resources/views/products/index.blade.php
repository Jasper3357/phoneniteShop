@extends('layouts.head')

@section('title')Products @endsection

@section('content')
<section class="pt-[80px] bg-mainWhite">
  <div class="container space mx-auto">
    <div class="text-center mt-12">
        <h1 class="text-3xl font-bold text-mainDark">Products</h1>
        <h3 class="mb-10 font-light">Here you can see all our products</h3>
      </div>
      <div class="flex flex-row justify-between gap-x-2 gap-y-10 flex-wrap">
        @foreach ($products as $product)
          <div class="bg-offWhite p-5 rounded-2xl flex-wrap flex flex-col w-1/5">
            <div class="bg-mainWhite flex justify-center items-center rounded-lg">
              <img src="{{ url('storage/product/'.$product->file_path) }}" class=" max-w-[60%] max-h-[85%]">
            </div>
            <div class="flex justify-center w-full">
              <img src="{{ asset('media/brands/'. $product->brand . '.png') }}" class=" max-w-[85%] max-h-[85%] -mt-2">
            </div>
            <div class="text-center -mt-10">
              <p>{{ $product->name }}</p>
            </div>
            <div class="mt-auto pt-5 flex flex-row justify-between">
              <div class="flex gap-2">
                @if ( $product->stock > 0)
                  1
                @else
                  0
                @endif
                <p>{{ $product->price }}</p>
              </div>
              <button>cart</button>
            </div>
          </div>
        @endforeach
      </div>
  </div>
  
  
</section>
@endsection