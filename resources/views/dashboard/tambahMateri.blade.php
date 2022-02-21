@extends('dashboard.layouts.app')

@section('content')

<div class="all-content-wrapper" style="margin-top: 60px; margin-bottom: 50px;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="review-tab-pro-inner">
                    <div class="breadcomb-ctn">
                        <h2 class="text-center">TAMBAH MATERI</h2>
                    </div>
                    <div id="myTabContent" class="tab-content custom-product-edit">
                        <div class="product-tab-list tab-pane fade active in" id="description">
                            <form action="{{ Route('materi.store') }}" method="POST" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="review-content-section">
                                            <div class="mg-b-pro-edt">
                                                @csrf
                                                    <select name="kelas_id" class="form-control pro-edt-select form-control-primary">
                                                        <option value="">Pilih Kelas</option>
                                                        @foreach ($kelases as $kelas)
                                                            @if (old('kelas_id') == $kelas->id)
                                                                <option value="{{ $kelas->id }}" selected>{{ $kelas->name }}</option>
                                                            @else    
                                                                <option value="{{ $kelas->id }}">{{ $kelas->name }}</option>
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                </div>
                                            <div class="mg-b-pro-edt">
                                                <input type="text" name="name" id="name" class="form-control" placeholder="Materi">
                                            </div>
                                            <div class="mg-b-pro-edt">
                                                <input type="text" name="slug" id="slug" class="form-control" placeholder="slug">
                                            </div>                                            
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="text-center custom-pro-edt-ds">
                                            <button type="submit" class="btn btn-ctl-bt waves-effect waves-light m-r-10">Tambah Materi
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
</script>

@endsection