@extends('layouts.index')

@section('title', '| Data Kategori')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Kategori</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Beranda</a></li>
                        <li class="breadcrumb-item active">Data Kategori</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-body">
                            <a href="{{ route('kategori.tambah') }}" class="btn btn-primary mb-3">Tambah Kategori</a>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">No</th>
                                        <th style="width: 400px">Kategori</th>
                                        <th style="width: 75px">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php($no = 1)
                                    @foreach ($kategori as $item)
                                        <tr>
                                            <th>{{ $no++ }}</th>
                                            <td>{{ $item->nama_kategori }}</td>
                                            <th>
                                                <a href="{{ route('kategori.edit', $item->id) }}" class="btn btn-primary"><i class="nav-icon fas fa-pen"></i></a>
                                                <a href="{{ route('kategori.hapus', $item->id) }}" class="btn btn-danger"><i class="nav-icon fas fa-trash"></i></a>
                                            </th>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
