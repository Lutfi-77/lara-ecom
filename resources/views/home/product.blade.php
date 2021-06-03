@extends('master/master')

@section('css')
<link rel="stylesheet" href={{asset('assets/css/product.css')}}>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.6.16/dist/css/uikit.min.css" />
@endsection

@section('title-name', 'Product Page')

@section('content')

{{-- Kategori --}}
<div class="container mt-5">
    <h3 class="mb-3">Category</h3>
    <div class="row">
        <div class="col-3">
            <div class="card-category">
                <div class="card-category-image">
                    <img src="https://ecs7-p.tokopedia.net/img/cache/350/attachment/2020/8/24/40768394/40768394_52efc3c1-34c2-460b-90d6-3a6e57210b17.jpg.webp">
                </div>
                <div class="card-category-text">
                    <h4>Gaming</h4>
                </div>
            </div>
        </div>

        <div class="col-3">
            <div class="card-category">
                <div class="card-category-image">
                    <img src="https://ecs7-p.tokopedia.net/img/cache/350/attachment/2020/8/24/40768394/40768394_52efc3c1-34c2-460b-90d6-3a6e57210b17.jpg.webp">
                </div>
                <div class="card-category-text">
                    <h4>Gaming</h4>
                </div>
            </div>
        </div>

        <div class="col-3">
            <div class="card-category">
                <div class="card-category-image">
                    <img src="https://ecs7-p.tokopedia.net/img/cache/350/attachment/2020/8/24/40768394/40768394_52efc3c1-34c2-460b-90d6-3a6e57210b17.jpg.webp">
                </div>
                <div class="card-category-text">
                    <h4>Gaming</h4>
                </div>
            </div>
        </div>

        <div class="col-3">
            <div class="card-category">
                <div class="card-category-image">
                    <img src="https://ecs7-p.tokopedia.net/img/cache/350/attachment/2020/8/24/40768394/40768394_52efc3c1-34c2-460b-90d6-3a6e57210b17.jpg.webp">
                </div>
                <div class="card-category-text">
                    <h4>Gaming</h4>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- Akhir kategori --}}

{{-- Best seller --}}
<div class="container mt-5">
    <h3 class="mb-3">Best sellers</h3>
    <div class="row">
        <div class="col-6 col-md-6 col-lg-3 col-sm-6 mb-5">
            <div class="card border-0 shadow">
                <img src="https://my-live-02.slatic.net/p/eef1bddd79a234cd743c17419f939361.jpg" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title text-center">Rolex KW super</h5>
                    <p class="card-text text-center text-danger">Rp.30.000</p>
                    <a href="#" class="btn btn-primary w-100">Lihat Detail</a>
                </div>
            </div>
        </div>

        <div class="col-6 col-md-6 col-lg-3 col-sm-6 mb-5">
            <div class="card border-0 shadow">
                <img src="https://my-live-02.slatic.net/p/eef1bddd79a234cd743c17419f939361.jpg" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title text-center">Rolex KW super</h5>
                    <p class="card-text text-center text-danger">Rp.30.000</p>
                    <a href="#" class="btn btn-primary w-100">Lihat Detail</a>
                </div>
            </div>
        </div>

        <div class="col-6 col-md-6 col-lg-3 col-sm-6 mb-5">
            <div class="card border-0 shadow">
                <img src="https://my-live-02.slatic.net/p/eef1bddd79a234cd743c17419f939361.jpg" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title text-center">Rolex KW super</h5>
                    <p class="card-text text-center text-danger">Rp.30.000</p>
                    <a href="#" class="btn btn-primary w-100">Lihat Detail</a>
                </div>
            </div>
        </div>

        <div class="col-6 col-md-6 col-lg-3 col-sm-6 mb-5">
            <div class="card border-0 shadow">
                <img src="https://my-live-02.slatic.net/p/eef1bddd79a234cd743c17419f939361.jpg" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title text-center">Rolex KW super</h5>
                    <p class="card-text text-center text-danger">Rp.30.000</p>
                    <a href="#" class="btn btn-primary w-100">Lihat Detail</a>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- Akhir best seller --}}


{{-- Product Terbaru --}}
<div class="container">
    <h3 class="mb-3">Product Terbaru</h3>
    <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider>

        <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@m uk-grid">
            <li>
                <div class="card border-0 shadow">
                    <img src="https://my-live-02.slatic.net/p/eef1bddd79a234cd743c17419f939361.jpg"
                        class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title text-center">Rolex KW super</h5>
                        <p class="card-text text-center text-danger">Rp.30.000</p>
                        <a href="#" class="btn btn-primary w-100">Lihat Detail</a>
                    </div>
                </div>
            </li>
            <li>
                <div class="card border-0 shadow">
                    <img src="https://my-live-02.slatic.net/p/eef1bddd79a234cd743c17419f939361.jpg"
                        class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title text-center">Rolex KW super</h5>
                        <p class="card-text text-center text-danger">Rp.30.000</p>
                        <a href="#" class="btn btn-primary w-100">Lihat Detail</a>
                    </div>
                </div>
            </li>
            <li>
                <div class="card border-0 shadow">
                    <img src="https://my-live-02.slatic.net/p/eef1bddd79a234cd743c17419f939361.jpg"
                        class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title text-center">Rolex KW super</h5>
                        <p class="card-text text-center text-danger">Rp.30.000</p>
                        <a href="#" class="btn btn-primary w-100">Lihat Detail</a>
                    </div>
                </div>
            </li>
            <li>
                <div class="card border-0 shadow">
                    <img src="https://my-live-02.slatic.net/p/eef1bddd79a234cd743c17419f939361.jpg"
                        class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title text-center">Rolex KW super</h5>
                        <p class="card-text text-center text-danger">Rp.30.000</p>
                        <a href="#" class="btn btn-primary w-100">Lihat Detail</a>
                    </div>
                </div>
            </li>
            <li>
                <div class="card border-0 shadow">
                    <img src="https://my-live-02.slatic.net/p/eef1bddd79a234cd743c17419f939361.jpg"
                        class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title text-center">Rolex KW super</h5>
                        <p class="card-text text-center text-danger">Rp.30.000</p>
                        <a href="#" class="btn btn-primary w-100">Lihat Detail</a>
                    </div>
                </div>
            </li>
        </ul>

        <a class="uk-position-center-left uk-position-small color-blue" href="#" uk-slidenav-previous
            uk-slider-item="previous"></a>
        <a class="uk-position-center-right uk-position-small color-blue" href="#" uk-slidenav-next
            uk-slider-item="next"></a>

    </div>
</div>
{{-- Akhir product Terbaru --}}

@endsection

@section('js')
<script src="https://cdn.jsdelivr.net/npm/uikit@3.6.16/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.6.16/dist/js/uikit-icons.min.js"></script>
@endsection
