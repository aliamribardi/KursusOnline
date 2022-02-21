@extends('dashboard.layouts.app')

@section('content')

<div class="all-content-wrapper" style="margin-top: 50px; margin-bottom: 50px;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-status-wrap">
                    <h4>List Kelas</h4>

                    {{-- Pesan --}}
                    @if (session()->has('success'))
                    <div class="alert alert-success" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        {{ session('success') }}
                    </div>
                    @endif

                    <div class="add-product">
                        <a href="{{ Route('kelas.create') }}">Tambah Kelas</a>
                    </div>
                    <table>
                        <tr>
                            <th>#</th>
                            <th>Nama Kelas</th>
                            <th>Kategori</th>
                            <th>Harga</th>
                            <th>Foto</th>
                            <th>Action</th>
                        </tr>
                        @foreach ( $kelases as $kelas )
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $kelas->name }}</td>
                                <td>{{ $kelas->kategorikelas->name }}</td>
                                <td>{{ $kelas->harga }}</td>
                                <td>IMG</td>
                                <td>
                                    <a href="{{ Route('kelas.edit', $kelas->id) }}">
                                        <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                    </a>
                                    <form action="{{ Route('kelas.destroy', $kelas->id) }}" method="POST">
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