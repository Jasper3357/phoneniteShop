<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Product Creator</title>
  @vite([
    'resources/css/app.css',
    'resources/css/splide.css',
    ])
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body class="container mx-auto bg-mainWhite text-mainDark font-franklin space">
  <div class="flex justify-center">
    <a href="{{ route('home') }}"><img src="{{ asset('media/logo.svg') }}" class="h-12 mt-6" alt="phonenite logo"></a>
  </div>
  <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data" class="mt-[10vh]">
    @csrf
    <div class="text-center">
      <h1 class="text-3xl font-bold text-mainDark">Product Creator</h1>
      <h3 class="mb-10 font-light">Create new products and add them to the catalog</h3>
    </div>
    <div class="flex flex-row gap-5 mb-6">
      <div class="w-1/2">
        <p class="mb-2 text-sm font-bold text-left">Name</p>
        <input type="text" name="name" id="name" placeholder="Example Product" class="bg-offWhite px-5 py-3 rounded-full @error('name') border-red-500 border-2 @enderror w-full" value="{{ old('name') }}">
        @error('name')
          <p class="mt-1 text-sm text-left text-red-500">{{ $message }}</p>
        @enderror
      </div>
      <div class="w-1/2">
        <p class="mb-2 text-sm font-bold text-left">Slug</p>
        <input type="text" name="slug" id="slug" placeholder="exampleProduct" class="bg-offWhite px-5 py-3 rounded-full @error('name') border-red-500 border-2 @enderror w-full" value="{{ old('slug') }}">
        @error('slug')
          <p class="mt-1 text-sm text-left text-red-500">{{ $message }}</p>
        @enderror
      </div>
    </div>
    <div class="flex flex-row gap-5 mb-6">
      <div class="w-1/3">
        <p class="mb-2 text-sm font-bold text-left">Brand</p>
        <select name="brand" id="brand" required class="w-full px-5 py-3 rounded-full bg-offWhite">
          <option value="" disabled selected>Pick a brand</option>
          <option value="pulsarnl">PulsarNL</option>
          <option value="apple">Apple</option>
          <option value="samsung">Samsung</option>
          <option value="huawei">Huawei</option>
          <option value="google">Google</option>
          <option value="xiaomi">Xiaomi</option>
          <option value="oneplus">OnePlus</option>
          <option value="motorola">Motorola</option>
          <option value="microsoft">Microsoft</option>
          <option value="oppo">Oppo</option>
          <option value="honor">Honor</option>
        </select>
        @error('brand')
          <p class="mt-1 text-sm text-left text-red-500">{{ $message }}</p>
        @enderror
      </div>
      <div class="w-1/3">
        <p class="mb-2 text-sm font-bold text-left">Stock</p>
        <input type="number" name="stock" id="stock" placeholder="99" class="bg-offWhite px-5 py-3 rounded-full @error('stock') border-red-500 border-2 @enderror w-full" value="{{ old('slug') }}">
        @error('stock')
          <p class="mt-1 text-sm text-left text-red-500">{{ $message }}</p>
        @enderror
      </div>
      <div class="w-1/3">
        <p class="mb-2 text-sm font-bold text-left">Price</p>
        <input type="number" step="any" name="price" id="price" placeholder="19.99" class="bg-offWhite px-5 py-3 rounded-full @error('price') border-red-500 border-2 @enderror w-full" value="{{ old('slug') }}">
        @error('price')
          <p class="mt-1 text-sm text-left text-red-500">{{ $message }}</p>
        @enderror
      </div>
    </div>
    <div class="mb-6">
      <p class="mb-2 text-sm font-bold text-left">Image</p>
      <input type="file" name="file" accept="image/png, image/jpeg, image/bmp" required>
    </div>
    <div class="flex justify-center w-full">
      <button type="submit" class="w-1/3 px-4 py-3 mt-4 text-xl font-bold transition-all border-2 rounded-full bg-mainPurple hover:text-mainPurple hover:bg-mainWhite border-mainPurple text-mainWhite">
        Create Product
      </button>
    </div>
    
  </form>
  
</body>
</html>