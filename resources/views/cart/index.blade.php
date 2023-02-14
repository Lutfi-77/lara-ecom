@extends('master/master')

@section('css')
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/css/swiper.min.css">
<link rel="stylesheet" type="text/css" href="{{url('assets/css/cart.css')}}">
@endsection

@section('title-name', 'Detail Product')

@section('content')
<div class="container">
    @if ($carts->isEmpty())
        <div class="position relative w-100">
            <h3 class="text-center">Cart Kosong</h3>
            <a href="{{route('home')}}" class="btn btn-info d-block text-light w-25 m-auto">Pergi Belanja</a>
        </div>
    @endif
    @foreach ($carts as $cart)
    <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
            <div class="col-md-4">
                {{-- <img src="http://localhost:8000/assets/img/shoes.png" class="img-fluid rounded-start" alt="cartimg"> --}}
                @if ($cart->product->image->isEmpty())
                <img src="{{asset('assets/img/noimage.png')}}" width="100%" class="img-fluid rounded-start">
                @endif
                {{-- @foreach ($cart->product->image as $item) --}}
                <img src="{{url('storage/'.$cart->product->image[0]->url)}}" width="100%" class="img-fluid rounded-start">
                {{-- @endforeach --}}
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">{{$cart->product->product_name}}</h5>
                    <div class="d-flex flex-column mb-3">
                        <h5 class="qty mb-3">
                            Quantity:
                        </h5>
                        <div class="input-group">
                            <span class="input-group-prepend">
                                <button type="button" id="minus" class="btn btn-outline-secondary btn-number"
                                    data-type="minus">
                                    <span class="fa fa-minus">-</span>
                                </button>
                            </span>
                            <input type="text" name="qty" id="qty" class="form-control input-number text-center"
                                value="{{$cart->qty}}" min="1">
                            <span class="input-group-append">
                                <button type="button" id="plus" class="btn btn-outline-secondary btn-number"
                                    data-type="plus">
                                    <span class="fa fa-plus">+</span>
                                </button>
                            </span>
                        </div>
                        <div class="text-danger fs-5 mt-2">
                            @rupiah($cart->price)
                        </div>
                    </div>
                    <div class="d-flex">
                        {{-- <div class="btn btn-info text-light me-2" data-bs-toggle="modal" data-bs-target="#addressModal">
                            Checkout
                        </div> --}}
                        <div class="btn btn-danger text-light">Delete</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach

    <!-- Modal -->
    {{-- <div class="modal fade" id="addressModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h6>Kirim Ke: </h6>
                    {{$user->customer_address}}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Checkout Now</button>
                </div>
            </div>
        </div>
    </div> --}}
</div>

<div class="total position-absolute bottom-0 bg-dark text-light py-4 w-100">
    <div class="container d-flex justify-content-between">
        <div class="d-flex align-items-center">
            <h4 class="me-3">Total: </h4>
            <h4>@rupiah($total)</h4>
            {{-- {{$carts->total}} --}}
        </div>
        <form action="{{route('checkout.store')}}" method="post">
            @csrf
            <input type="hidden" name="total" value="{{$total}}">
            <button class="btn btn-success">Checkout All</button>
        </form>
    </div>
</div>
@endsection

@section('js')
<script>
    const minus = document.querySelector('#minus');
    const plus = document.querySelector('#plus');
    const qty = document.querySelector('#qty');
    let currentValue = parseInt(qty.value);

    qty.addEventListener('change', function () {
        // if(qty.value > qty.getAttribute("min")){
        //     qty.removeAttribute("disabled");
        // }
        console.log("berubah")
    })

    minus.addEventListener('click', function () {
        currentValue -= 1;
        qty.value = currentValue
    });

    plus.addEventListener('click', function () {
        currentValue += 1;
        qty.value = currentValue
    });

</script>
@endsection
