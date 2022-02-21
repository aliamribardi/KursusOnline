@extends('frontend.layouts.app')

@section('content')

<div class="container">
    <div class="row">
        @foreach ($statuses as $status)
            <div class="col">
                <div class="card" style="width: 18rem;">
                @if ($status->image)
                    <img src="{{ asset('storage/' . $status->image) }}" alt="{{ $status->name }}" class=" mt-3 d-block p-3" style="height: 150px; width: 286px;">
                @else  
                    <img src="{{ asset('img/no-image.png') }}" class="card-img-top p-3" alt="{{ $status->name }}" style="height: 150px; width: 286px;">
                @endif
                <div class="card-body">
                    <h5 class="card-title">{{ $status->name }}</h5>
                    <p class="card-text"></p>
                    
                    @if ($status->status == 'no')
                        <a href="#" class="btn btn-primary">Tunggu verivikasi</a>
                    @elseif ($status->status == 'yes')
                        <a href="#" class="btn btn-success">Terverivikasi</a>
                    @endif
                </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
    
@endsection