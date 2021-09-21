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
        <form action="{{route('seller.storeProduct')}}" method="post" enctype="multipart/form-data" id="uploadData">
            @csrf
            <div class="row">
                <div class="col-lg-6 col-sm-6 col-md-6">
                    <div class="form-group">
                        <label>Nama Product</label>
                        <input type="text" class="form-control" name="productName">
                    </div>

                    <div class="form-group">
                        <label>Category Product</label>
                        <select class="form-select" id="inputGroupSelect01" name="productCategory">
                            @foreach ($categories as $category)
                            <option value="{{$category->id}}">{{$category->category_name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6 col-md-6">
                    <div class="form-group">
                        <label>Stock Product</label>
                        <input type="number" min="0" class="form-control mb-2" name="productStock">
                    </div>

                    <div class="form-group">
                        <label>Harga Product</label>
                        <input type="number" min="0" class="form-control" name="productPrice">
                    </div>
                </div>

                <div class="form-group">
                    <label>Deskripsi Product</label>
                    <textarea class="form-control" style="height: 150px;" aria-label="With textarea"
                        name="productDesc"></textarea>
                </div>
                @if($errors->any())
                {{dd($errors)}}
                @endif
                <div class="form-group">
                    <label>Upload Foto Product</label>
                    <input type="hidden" name="productId" value="" id="productId">
                    <div id="dZUpload" class="dropzone"></div>

                    <button class="btn btn-primary mt-3">Simpan</button>
                </div>

            </div>
        </form>
    </div>
</div>
@endsection

@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.0/min/dropzone.min.js"></script>
<script>
    Dropzone.autoDiscover = false;

    $(document).ready(function () {
        let CSRF_TOKEN = '{{csrf_token()}}';
        let idProduct;
        var myDropzone = new Dropzone("div#dZUpload", {
            url: '{{route("seller.storeImg")}}',
            autoProcessQueue: false,
            paramName: "images",
            maxFileSize: 1,
            parallelUploads: 10,
            addRemoveLinks: true,
            acceptedFiles: 'image/*',
            dictInvalidFileType: 'This form only accepts images.',
            // params: {
            //     _token: CSRF_TOKEN,
            //     product_id: idProduct
            // },
            headers: {
                'X-CSRF-TOKEN': CSRF_TOKEN
            },
            init: function () {
                $('#uploadData').submit(function (e) {
                    e.preventDefault()
                    let URL = $('#uploadData').attr('action')
                    let formData = $('#uploadData').serialize()

                    $.ajax({
                        type: "POST",
                        url: URL,
                        data: formData,

                        success: function (result) {
                            var productId = result.product_id;
                            $("#productId").val(productId);
                            console.log(result);
                            myDropzone.processQueue();
                        },
                        error: function (error) {
                            console.log(error);
                            console.log('pastikan semua terisi ya');
                        }
                    })
                })

                this.on("sending", function (file, xhr, formData) {
                    let idProduct = $("#productId").val();
                    formData.append('productId', idProduct)
                    console.log(formData);
                })

                this.on("success", function (file, response) {
                    //reset the form
                    $('#uploadData')[0].reset();
                    //reset dropzone
                    $('.dz-preview').empty();
                    window.location = '{{route("seller.products")}}'
                })

                this.on("error", function (file, response) {
                    console.log("pastikan semua terisi");
                })
            }
        })
    })

</script>
@endsection
