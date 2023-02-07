@extends('master/master')

@section('css')
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/css/swiper.min.css">
<link rel="stylesheet" type="text/css" href="{{url('assets/css/detail.css')}}">
@endsection

@section('title-name', 'Detail Product')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-5">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    @if ($product->image->isEmpty())
                    <div class="swiper-slide">
                        <img src="{{asset('assets/img/noimage.png')}}" width="100%">
                    </div>
                    @endif
                    @foreach ($product->image as $item)
                    <div class="swiper-slide">
                        <img src="{{url('storage/'.$item->url)}}" width="100%">
                    </div>
                    @endforeach
                </div>
                <!-- Add Pagination -->
                <!-- <div class="swiper-pagination"></div> -->

                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
            <div class="thumbnail-slider">
                <div class="d-flex">
                    @php
                    $data_slider = 1;
                    @endphp
                    @foreach ($product->image as $thumb)
                    <img src="{{url('storage/'.$thumb->url)}}" alt="thumbnail" class="thumb"
                        data-slider="{{$data_slider}}">
                    @php
                    $data_slider++
                    @endphp
                    @endforeach
                </div>
            </div>
        </div>
        <div class="col-7">
            <h3>{{$product->product_name}}</h3>
            <h4 class="text-right text-danger">{{$product->price}}</h4>
            <h4>Deskripsi: </h4>
            <p>
                {{$product->product_desc}}
            </p>
            <form action="{{route('cart.store')}}" method="post">
                <button class="btn btn-success">Beli</button>
                <button class="btn btn-info">Tambah Keranjang</button>
            </form>
        </div>
    </div>
</div>
@endsection

@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/js/swiper.min.js"></script>
<script>
    let thumb = document.querySelectorAll(".thumb");

    var swiper = new Swiper('.swiper-container', {
        loop: 'true',
        autoHeight: true,
        pagination: {
            el: '.swiper-pagination',
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        }
    });

    for (var i = 0; i < thumb.length; i++) {
        thumb[i].addEventListener('click', function () {
            swiper.slideTo(this.dataset.slider)
        })
    }

</script>
@endsection
