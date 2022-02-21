@extends('frontend.layouts.app')

@section('content')

<section class="features-icons bg-light text-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <h2>Detail Kelas</h2>
                <div class="table-responsive">
                    <table class="table table-striped table-sm">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Kelas</th>
                        <th scope="col">Materi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($materies->materi as $mat)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $mat->kelas->name }}</td>
                                <td>{{ $mat->name }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
    
@endsection