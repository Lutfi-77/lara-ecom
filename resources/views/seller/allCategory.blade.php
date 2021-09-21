@extends('seller/master/masterSeller')

@section('title', 'Categories')

@section('page-name', 'Categories')

@section('content')
<div class="card">
    <div class="card-body">
        <div class="container">
            <div class="row">
                @foreach ($categories as $category)
                <div class="col-lg-3">
                    <div class="card shadow">
                        <div class="card-body">
                            <div class="card-title" style="font-size: 15px; font-weight: bold;">
                                {{$category->category_name}}</div>
                            <a href="{{route('seller.categoryDelete', $category->id)}}" class="btn btn-danger">Delete</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
