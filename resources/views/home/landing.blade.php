@extends('master/master')
@section('title-name', 'Home')


@section('content')

{{-- Hero --}}
<div class="section-hero">
    <div class="hero">
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="hero-text">
            Product Kualitas Terbaik
            Dengan Design Terbaik
        </div>
        <div class="hero-img">
            <img src="{{asset('assets/img/shoes.png')}}" alt="">
        </div>
    </div>
</div>
{{-- Akhir Hero --}}


{{-- Best product --}}
<div class="section__bestProduct">
    <div class="container-fluid">
        <h3 class="text-center p-4">Best Product</h3>

        <div class="row">
            @foreach ($products as $product)
            <div class="col-12 col-sm-8 col-md-6 col-lg-4 mb-2">
                <a href="{{route('detail', $product->id)}}" class="unlink">
                    <div class="card">
                        <img src="{{$product->image->isEmpty() ? asset('assets/img/noimage.png') : url('storage/'.$product->image[0]->url)}}" class="card-img" style="max-height: 300px; object-fit: contain">
                        <div class="card-body">
                            <h4 class="card-title">{{$product->product_name}}</h4>
                            <h6 class="card-subtitle mb-2 text-muted">Category: {{$product->category->category_name}}</h6>
                            <p class="card-text">
                                The Vans All-Weather MTE Collection features footwear and apparel designed to withstand the
                                elements whilst still looking cool. </p>
                            <div class="options d-flex flex-fill">
                                <select class="form-select form-select-md mb-3" aria-label=".form-select-md example">
                                    <option selected>Color</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
    
                                <select class="form-select form-select-md mb-3" aria-label=".form-select-md example">
                                    <option selected>size</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="buy d-flex justify-content-between align-items-center">
                                <div class="price text-success">
                                    <h5 class="mt-4">$125</h5>
                                </div>
                                <a href="#" class="btn btn-danger mt-3"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>

    </div>
</div>
{{-- Akhir best product --}}







@endsection

@section('js')
<script>
    window.onscroll = function () {
        const navbar = document.getElementById('changeColor');
        const linkItem = document.getElementsByClassName('item__link');
        if (window.scrollY > 325) {
            // rgba(255, 255, 255, 0.2)
            navbar.style.backgroundColor = 'black';
            // navbar.style.color = 'white';
            // for (let i = 0; i < linkItem.length; i++){
            //     linkItem[i].classList.add('linkOnScroll')
            // }

        } else {
            navbar.style.backgroundColor = 'transparent';
            // navbar.style.color = 'white';
            // for (let i = 0; i < linkItem.length; i++){
            //     linkItem[i].classList.remove('linkOnScroll')
            // }
        }
    }

</script>
@endsection
