@extends('frontend.layouts.app')

@section('content')

<section class="features-icons bg-light text-center">
    <div class="container">
        <div class="row">
            <h1>Daftar Kelas</h1>
            @foreach ($kelases->kelas as $kelas)
                <div class="col-lg-4">
                    <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                            @if ($kelas->image)
                                <img src="{{ asset('storage/' . $kelas->image) }}" alt="{{ $kelas->name }}" class=" mt-3 d-block m-auto mb-3" style="height: 150px; width: 286px;">
                            @else  
                                <img src="{{ asset('img/no-image.png') }}" class="card-img-top m-auto mb-3" alt="{{ $kelas->name }}" style="height: 150px; width: 286px;">
                            @endif
                        <a href="{{ Route('Fkelas.show', [$kelases->slug, $kelas->slug]) }}" class="btn btn-primary" style="width: 190px">{{ $kelas->name }}</a>
                        <form action="{{ Route('addToCart') }}" method="POST" enctype="multipart/form-data" class="d-inline">
                            @csrf
                            <input type="hidden" value="{{ $kelas->id }}" name="id">
                            <input type="hidden" value="{{ $kelas->name }}" name="name">
                            <input type="hidden" value="{{ $kelas->slug }}" name="slug">
                            <input type="hidden" value="{{ $kelas->harga }}" name="harga">
                            <input type="hidden" value="{{ $kelas->image ?? asset('img/no-image.png') }}"  name="image">
                            <input type="hidden" value="1" name="quantity">
                            <button class="btn btn-primary" onclick="return confirm('Ingin Menambah Ke Keranjang??')">Add Cart</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
    
@endsection