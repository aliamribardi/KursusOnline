@extends('dashboard.layouts.app')

@section('content')

<div class="all-content-wrapper" style="margin-top: 50px; margin-bottom: 50px;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-status-wrap">
                    <h4>List Checkouts</h4>

                    {{-- Pesan --}}
                    @if (session()->has('success'))
                    <div class="alert alert-success" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        {{ session('success') }}
                    </div>
                    @endif

                    <div class="add-product">
                        <a href="">Tambah Kelas</a>
                    </div>
                    <table>
                        <tr>
                            <th>#</th>
                            <th>Nama User</th>
                            <th>Kelas</th>
                            <th>Jumlah</th>
                            <th>Status</th>
                        </tr>
                        @foreach ($checkouts as $checkout)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $checkout->checkout->user->name }}</td>
                                <td>{{ $checkout->kelas->name }}</td>
                                <td>{{ $checkout->quantity }}</td>
                                <td>{{ $checkout->status }}</td>
                                <td>
                                    <form action="{{ Route('checkout.update', $checkout->id) }}" method="POST" enctype="multipart/form-data" class="d-inline">
                                        @method('PUT')
                                        @csrf
                                        <input type="hidden" value="yes" name="status">
                                        <button class="btn btn-primary" onclick="return confirm('Ingin menverivikasi {{ $checkout->checkout->user->name }}??')">Verivikasi</button>
                                    </form>
                                </td>
                            </tr> 
                        @endforeach 
                    </table>
                    <div class="custom-pagination">
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    
@endsection