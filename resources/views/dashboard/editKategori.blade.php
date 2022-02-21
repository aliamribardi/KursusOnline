@extends('dashboard.layouts.app')

@section('content')

<div class="all-content-wrapper" style="margin-top: 60px; margin-bottom: 50px;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="review-tab-pro-inner">
                    <div class="breadcomb-ctn">
                        <h2 class="text-center">EDIT KATEGORI</h2>
                    </div>
                    <div id="myTabContent" class="tab-content custom-product-edit">
                        <div class="product-tab-list tab-pane fade active in" id="description">
                            <form action="{{ Route('kategori.update', $kategori->id) }}" method="POST" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="review-content-section">
                                            @method('PUT')
                                            @csrf
                                            <div class="mg-b-pro-edt">
                                                <input type="text" name="name" id="name" class="form-control" placeholder="Kategori" value="{{ $kategori->name }}">
                                            </div>
                                            <div class="mg-b-pro-edt">
                                                <input type="text" name="slug" id="slug" class="form-control" placeholder="slug" value="{{ $kategori->slug }}">
                                            </div>
                                            <div class="mg-b-pro-edt">
                                                <input type="hidden" name="oldImage" value="{{ $kategori->image }}">
                                                @if ($kategori->image)
                                                    <img src="{{ asset('storage/' . $kategori->image) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
                                                @else
                                                    <img class="img-preview img-fluid mb-3 col-sm-5">
                                                @endif
                                                <input type="file" name="image" class="form-control" placeholder="Gambar" onchange="previewImage()">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="text-center custom-pro-edt-ds">
                                            <button type="submit" class="btn btn-ctl-bt waves-effect waves-light m-r-10">Edit Kategori
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    const name = document.querySelector('#name');
    const slug = document.querySelector('#slug');

    name.addEventListener('change', function() {
        fetch('/dashboard/checkSlug?name=' + name.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug) 
    });

    function previewImage() {
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
        
</script>

@endsection