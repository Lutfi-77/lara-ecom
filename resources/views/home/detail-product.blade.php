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
                    <div class="swiper-slide"><img
                            src="https://my-live-02.slatic.net/p/eef1bddd79a234cd743c17419f939361.jpg" width="100%">
                    </div>
                    <div class="swiper-slide swiper-slide-active"><img
                            src="{{url('assets/img/shoes.png')}}" width="100%">
                    </div>
                    <div class="swiper-slide"><img
                            src="https://my-live-02.slatic.net/p/eef1bddd79a234cd743c17419f939361.jpg" width="100%">
                    </div>
                    <div class="swiper-slide"><img
                            src="https://my-live-02.slatic.net/p/eef1bddd79a234cd743c17419f939361.jpg" width="100%">
                    </div>
                    <div class="swiper-slide"><img
                            src="https://my-live-02.slatic.net/p/eef1bddd79a234cd743c17419f939361.jpg" width="100%">
                    </div>
                </div>
                <!-- Add Pagination -->
                <!-- <div class="swiper-pagination"></div> -->

                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
			<div class="thumbnail-slider">
				<div class="d-flex">
					<img src="https://my-live-02.slatic.net/p/eef1bddd79a234cd743c17419f939361.jpg" alt="thumbnail" class="thumb" data-slider="1">
					<img src="{{url('assets/img/shoes.png')}}" alt="thumbnail" class="thumb" data-slider="2">
					<img src="https://my-live-02.slatic.net/p/eef1bddd79a234cd743c17419f939361.jpg" alt="thumbnail" class="thumb" data-slider="3">
				</div>
			</div>
        </div>
        <div class="col-7">
            <h3>Rolex Premium</h3>
			<h4 class="text-right text-danger">Rp.40.000.000</h4>
			<h4>Deskripsi: </h4>
			<p>
				Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quidem praesentium molestias hic eligendi est, deserunt enim vitae omnis quis, voluptatem, sequi sed accusamus velit iste ad minima accusantium dolor? Fugiat.
			</p>
			<button class="btn btn-success">Beli</button>
			<button class="btn btn-info">Tambah Keranjang</button>
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

	for(var i =0; i < thumb.length; i++){
		thumb[i].addEventListener('click', function(){
			swiper.slideTo(this.dataset.slider)
		})
	}

</script>
@endsection
