@extends('seller/master/masterSeller')

@section('title', 'Products')

@section('page-name', 'Products')

@section('content')
<div class="card">
    <div class="card-body">
        <div class="container">
            <div class="row">
                @foreach ($getProduct as $products)
                {{-- {{dd($products->image)}} --}}
                <div class="col-lg-3">
                    <div class="card shadow">
                        <img src="{{url('storage/'.$products->image[0]->url)}}"
                            class="card-img-top" alt="productImage">
                        <div class="card-body">
                            <div class="card-title" style="font-size: 15px; font-weight: bold;">{{$products->product_name}}</div>
                            <p class="card-text text-justify">
                                {{ \Illuminate\Support\Str::limit($products->product_desc, 100, $end='...') }}
                            </p>
                            <a href="{{route('seller.addImageProduct', $products->id)}}" class="btn btn-primary">Add Image</a>
                            <a href="{{route('seller.detailProduct', $products->id)}}" class="btn btn-info">Detail</a>
                            <a href="{{route('seller.deleteProduct', $products->id)}}" class="btn btn-danger">Delete</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
