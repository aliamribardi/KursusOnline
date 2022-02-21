@extends('frontend.layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            @foreach ($kelases as $kelas)
                <div class="col-lg-4 my-3">
                    <div class="card" style="width: 18rem;">
                        <form action="{{ Route('removeCart') }}" method="POST">
                            @csrf
                            <input type="hidden" value="{{ $kelas->id }}" name="id">
                            <input type="hidden" value="{{ $kelas->status }}" name="status">
                            <button class="btn-danger p-2 float-end" style="z-index: 100"><span data-feather="x-square"></span></button>
                        </form>
                        @if ($kelas->attributes->image)
                            <img src="{{ asset('storage/' . $kelas->attributes->image) }}" alt="{{ $kelas->name }}" class=" mt-3 d-block p-3" style="height: 150px; width: 286px;">
                        @else  
                            <img src="{{ asset('img/no-image.png') }}" class="card-img-top p-3" alt="{{ $kelas->name }}" style="height: 150px; width: 286px;">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $kelas->name }}</h5>
                            <p class="card-text">{{ $kelas->price }}K</p>
                            <form action="{{ Route('updateCart') }}" method="POST">
                                @csrf
                                <input type="hidden" name="id" value="{{ $kelas->id}}" >
                                <input type="number" name="quantity" value="{{ $kelas->quantity }}" class="w-6 text-center bg-gray-300" />
                                <button type="submit" class="btn-primary px-2 pb-2 ml-2 text-white bg-blue-500">update</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="row">
                <h4 class="mb-3">Total :  {{ Cart::getTotal(); }}K</h4>
            </div>
            <div class="col text-center">
                <form action="{{ Route('removeAllCart') }}" method="POST" class="d-inline">
                    @csrf
                    <button class="btn btn-danger p-2 col-md-5"><span data-feather="x-square"></span> Remove All Class</button>
                </form>
                @role('user')
                <form action="{{ Route('buyAll') }}" method="POST" class="d-inline">
                    @csrf
                    <button class="btn btn-danger p-2 col-md-5"><span data-feather="shopping-bag"></span>  Buy All Class</button>
                </form>
                @endrole
            </div>
        </div>
    </div>

@endsection