@extends('seller/master/masterSeller')
@section('css')
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/css/swiper.min.css">
<link rel="stylesheet" type="text/css" href="{{url('assets/css/detail.css')}}">
@endsection
@section('title', 'Detail Product')

@section('page-name', 'Detail Product')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-5">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    @foreach ($detailProduct->image as $image)
                    <div class="swiper-slide">
                        <img src="{{url('storage/'.$image->url)}}" width="100%">
                    </div>
                    @endforeach
                </div>
                <!-- Add Pagination -->
                <!-- <div class="swiper-pagination"></div> -->

                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
            <div class="thumbnail-slider">
                {{-- <div class="d-flex">
                    <img src="https://my-live-02.slatic.net/p/eef1bddd79a234cd743c17419f939361.jpg" alt="thumbnail"
                        class="thumb" data-slider="1">
                    <img src="{{url('assets/img/shoes.png')}}" alt="thumbnail" class="thumb" data-slider="2">
                <img src="https://my-live-02.slatic.net/p/eef1bddd79a234cd743c17419f939361.jpg" alt="thumbnail"
                    class="thumb" data-slider="3">

            </div> --}}
            <div class="d-flex">
                @php
                    $i = 1;
                @endphp
                @foreach ($detailProduct->image as $image)
                    <img src="{{url('storage/'.$image->url)}}" width="100%" class="thumb" data-slider="{{$i}}">
                    @php
                        $i++;
                    @endphp
                @endforeach
            </div>
        </div>
    </div>
    <div class="col-7">
        <h3>{{$detailProduct->product_name}}</h3>
        <h4 class="text-right text-danger">{{"Rp ".number_format($detailProduct->price,2,',','.')}}</h4>
        <h4>Description: </h4>
        <p>
            {{$detailProduct->product_desc}}
        </p>
        <a href="#" class="btn btn-success">Edit</a>
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
