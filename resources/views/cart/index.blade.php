@extends('master/master')

@section('css')
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/css/swiper.min.css">
<link rel="stylesheet" type="text/css" href="{{url('assets/css/detail.css')}}">
@endsection

@section('title-name', 'Detail Product')

@section('content')
<div class="container">
    @foreach ($carts as $cart)
    {{-- {{dd($cart->product)}} --}}
    <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="http://localhost:8000/assets/img/shoes.png" class="img-fluid rounded-start" alt="cartimg">
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
                            <input type="text" name="qty" id="qty" class="form-control input-number text-center" value="{{$cart->qty}}" min="1">
                            <span class="input-group-append">
                                <button type="button" id="plus" class="btn btn-outline-secondary btn-number"
                                    data-type="plus">
                                    <span class="fa fa-plus">+</span>
                                </button>
                            </span>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="btn btn-info text-light me-2">Checkout</div>
                        <div class="btn btn-danger text-light">Delete</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
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
