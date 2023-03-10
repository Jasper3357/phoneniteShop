@extends('layouts.head')
@section('title', 'Cart')
@section('content')
<section class="pt-[80px] container space mx-auto">
  <div class="mt-12 text-center">
    <h1 class="text-3xl font-bold text-mainDark">Cart</h1>
    <h3 class="mb-10 font-light">See what's in your cart</h3>
  </div>
  <table id="cart" class="">
    <thead>
      <tr>
        <th style="width:50%" class="text-left">Product</th>
        <th style="width:10%" class="text-left">Price</th>
        <th style="width:8%" class="text-center">Quantity</th>
        <th style="width:22%" class="text-center">Subtotal</th>
        <th style="width:10%" class="text-left"></th>
      </tr>
    </thead>
    <tbody>

    <?php $total = 0 ?>

    @if(session('cart'))
      @foreach(session('cart') as $id => $details)

        <?php $total += $details['price'] * $details['quantity'] ?>

        <tr>
          <td data-th="Product">
            <div class="flex flex-row">
              <div class="w-1/3 hidden-xs h-[125px] aspect-square flex items-center"><img src="{{ url('storage/product/'.$details['photo']) }}" alt="..." class="h-[80%]"/></div>
              <div class="flex items-center w-2/3">
                <h4 class="nomargin">{{ $details['name'] }}</h4>
              </div>
            </div>
          </td>
          <td data-th="Price"><x-money amount="{{ $details['price'] }}" currency="EUR" /></td>
          <td data-th="Quantity">
            <input type="number" class="text-center form-control" value="{{ $details['quantity'] }}">
          </td>
          <td data-th="Subtotal" class="text-center"><x-money amount="{{ $details['price'] * $details['quantity'] }}" currency="EUR"/></td>
          <td class=" actions" data-th="">
            <div class="flex flex-row gap-3">
              <button class="update-cart">Refresh</button>
              <button class="remove-from-cart">Delete</button>
            </div>
            
          </td>
        </tr>
      @endforeach
    @endif
    </tbody>
    <tfoot class="">
    <tr class="my-2">
      <td></td>
      <td colspan="2" class="hidden-xs"></td>
      <td class="text-center hidden-xs"><strong>Total <x-money amount="{{ $total }}" currency="EUR"/></strong></td>
    </tr>
    </tfoot>
  </table>
  <div class="my-10">
    <a href="{{ route('products') }}" class="px-4 py-2 mt-8 text-base font-bold transition-all border-2 rounded-full w-80 bg-mainPurple hover:text-mainPurple hover:bg-mainWhite border-mainPurple text-mainWhite">Continue Shopping</a>
  </div>
</section>
@endsection

@section('scripts')
    <script type="text/javascript">
        $(".update-cart").click(function (e) {
           e.preventDefault();
           var ele = $(this);
            $.ajax({
               url: '{{ route('updateCart') }}',
               method: "patch",
               data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id"), quantity: ele.parents("tr").find(".quantity").val()},
               success: function (response) {
                   window.location.reload();
               }
            });
        });
        $(".remove-from-cart").click(function (e) {
            e.preventDefault();
            var ele = $(this);
            if(confirm("Are you sure")) {
                $.ajax({
                    url: '{{ route('removeCart') }}',
                    method: "DELETE",
                    data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id")},
                    success: function (response) {
                        window.location.reload();
                    }
                });
            }
        });
    </script>
@endsection