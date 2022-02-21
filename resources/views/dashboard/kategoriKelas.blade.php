@extends('dashboard.layouts.app')

@section('content')

<div class="all-content-wrapper" style="margin-top: 50px; margin-bottom: 50px;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-status-wrap">
                    <h4>List Kategori</h4>

                    {{-- Pesan --}}
                    @if (session()->has('success'))
                    <div class="alert alert-success" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        {{ session('success') }}
                    </div>
                    @endif

                    <div class="add-product">
                        <a href="{{ Route('kategori.create') }}">Tambah Kategori</a>
                    </div>
                    <table>
                        <tr>
                            <th>#</th>
                            <th>Kategori</th>
                            <th>Foto</th>
                            <th>Action</th>
                        </tr>
                        @foreach ($kategories as $kategori)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $kategori->name }}</td>
                                <td>
                                    @if ($kategori->image)
                                        <img src="{{ asset('storage/' . $kategori->image) }}" alt="{{ $kategori->name }}" class=" mt-3 d-block" style="height: 150px; width: 286px;">
                                    @else  
                                        <img src="{{ asset('img/no-image.png') }}" class="card-img-top" alt="{{ $kategori->name }}" style="height: 150px; width: 286px;">
                                    @endif
                                </td>
                                <td> 
                                    <a href="{{ Route('kategori.edit', $kategori->id) }}">
                                        <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                    </a>
                                    <form action="{{ Route('kategori.destroy', $kategori->id) }}" method="POST">
                                        @method('delete')
                                        @csrf
                                        <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"  onclick="return confirm('yakin??')"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
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