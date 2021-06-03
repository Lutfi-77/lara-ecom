@extends('seller/master/masterSeller')

@section('title', 'Dashboard')

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
        <form action="{{route('seller.addProduct')}}" method="post" enctype="multipart/form-data" id="uploadData">
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
                            <option selected>Choose...</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6 col-md-6">
                    <div class="form-group">
                        <label>Stock Product</label>
                        <input type="number" min="0" value="0" class="form-control mb-2" name="productStock">
                    </div>

                    <div class="form-group">
                        <label>Harga Product</label>
                        <input type="number" min="0" value="0" class="form-control" name="productPrice">
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
{{-- <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script> --}}
<script>
    Dropzone.autoDiscover = false;

    $(document).ready(function () {
        let CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        var myDropzone = new Dropzone("div#dZUpload", {
            url: '{{route("seller.storeImg")}}',
            autoProcessQueue: false,
            paramName: "images",
            maxFileSize: 1,
            acceptedFiles: 'image/*',
            dictInvalidFileType: 'This form only accepts images.',
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
                            console.log(formData);
                            myDropzone.processQueue();
                        },
                        error: function (error) {
                            console.log('error');
                        }
                    })
                })

                // this.on("success", function (file, response) {
                //     console.log(response);
                // })
                // this.on("error", function (file, response) {
                //     console.log(response);
                // })
            }
        })
    })

</script>
@endsection
