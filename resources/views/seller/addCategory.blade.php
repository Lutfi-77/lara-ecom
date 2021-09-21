@extends('seller/master/masterSeller')

@section('title', 'Add Product')

@section('css')
<link rel="stylesheet" href="{{asset('assets/seller/css/custom/style.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.0/dropzone.min.css"
    integrity="sha512-0ns35ZLjozd6e3fJtuze7XJCQXMWmb4kPRbb+H/hacbqu6XfIX0ZRGt6SrmNmv5btrBpbzfdISSd8BAsXJ4t1Q=="
    crossorigin="anonymous" />
@endsection

@section('page-name', 'Add Product')

@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{route('seller.storeCategory')}}" method="post">
            @csrf
            <div class="form-group">
                <label>Nama Category</label>
                <input type="text" class="form-control" name="categoryName">
            </div>
            <div class="form-group">
                <label>Deskripsi Category</label>
                <textarea class="form-control" style="height: 150px;" aria-label="With textarea" name="categoryDesc"></textarea>
            </div>

            <button class="btn btn-primary">Save</button>
        </form>
    </div>
</div>
</div>
@endsection
