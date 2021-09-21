@extends('seller/master/masterSeller')

@section('css')
<link rel="stylesheet" href="{{asset('assets/seller/css/custom/style.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.0/dropzone.min.css"
    integrity="sha512-0ns35ZLjozd6e3fJtuze7XJCQXMWmb4kPRbb+H/hacbqu6XfIX0ZRGt6SrmNmv5btrBpbzfdISSd8BAsXJ4t1Q=="
    crossorigin="anonymous" />
@endsection

@section('title', 'Categories')

@section('page-name', 'Categories')

@section('content')
<div class="card">
    <div class="card-body">
        <div class="container">
            <form action="{{route('seller.storeImg')}}" method="post" enctype="multipart/form-data" id="uploadData">
                <div class="form-group">
                    <label>Upload Foto Product</label>
                    <input type="hidden" name="productId" value="{{$id}}" id="productId">
                    <div id="dZUpload" class="dropzone"></div>

                    <button class="btn btn-primary mt-3">Simpan</button>
                </div>
            </form>
        </div>
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
            headers: {
                'X-CSRF-TOKEN': CSRF_TOKEN
            },
            init: function () {
                $('#uploadData').submit(function (e) {
                    e.preventDefault()
                    myDropzone.processQueue()
                })

                this.on("sending", function (file, xhr, formData) {
                    let idProduct = $("#productId").val();
                    formData.append('productId', idProduct)
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
