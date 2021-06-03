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
        <div class="row">
            <div class="col-lg-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <label>Nama Product</label>
                    <input type="text" class="form-control">
                </div>

                <div class="form-group">
                    <label>Category Product</label>
                    <select class="form-select" id="inputGroupSelect01">
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
                    <input type="number" min="0" value="0" class="form-control mb-2">
                </div>

                <div class="form-group">
                    <label>Harga Product</label>
                    <input type="number" min="0" value="0" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label>Deskripsi Product</label>
                <textarea class="form-control" style="height: 150px;" aria-label="With textarea"></textarea>
            </div>
            @if($errors->any())
            {{dd($errors)}}
            @endif
            <div class="form-group">
                <label>Upload Foto Product</label>
                <form action="{{route('seller.storeImg')}}" class="dropzone" id="my-awesome-dropzone" name="file" enctype="multipart/form-data">
                    @csrf
                </form>
                {{-- <div class="upload-area">
                    <form action="post" enctype="multipart/form-data" class="w-100 h-100 form-area">
                        <div class="upload-label">
                            <header>Drag It Here.</header>
                            <span>Or</span>
                            <input type="file" style="display: none;" id="file">
                            <label for="file" class="btn btn-primary">Choose File</label>
                        </div>
                        <div class="drop">
                            <h3>Drop Here!</h3>
                        </div>
                    </form>
                </div> --}}
            </div>

        </div>
    </div>
</div>
@endsection

@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.0/min/dropzone.min.js"></script>
<script>
    // var Dropzone = new Dropzone();
    Dropzone.options.myAwesomeDropzone = {
        paramName: "images",
        maxFileSize: 1,
        acceptedFiles: 'image/*',
        dictInvalidFileType: 'This form only accepts images.',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        init: function () {
            this.on("success", function(file, response){
                console.log(response);
            })
            this.on("error", function(file, response){
                console.log(response);
            })
        }
    }

</script>
{{-- <script>
    let uploadArea = document.querySelector(".upload-area");
    let files;
    uploadArea.addEventListener("dragover", function (e) {
        e.preventDefault();
        uploadArea.classList.add("active");
    })

    uploadArea.addEventListener("dragleave", function (e) {
        e.preventDefault();
        uploadArea.classList.remove("active");
    })

    uploadArea.addEventListener("drop", function (e) {
        e.preventDefault();
        e.stopPropagation();
        // var formData = new FormData();
        var coba = {};
        files = e.dataTransfer.files;
        coba = files;
        console.log(coba);
    })

</script> --}}
@endsection
