@extends('layouts.index')
    
@section('title', '| Form Kategori')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Form Kategori</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Beranda</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('kategori') }}">Kategori</a></li>
                        <li class="breadcrumb-item active">Form Kategori</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card card-primary">
                    <form action="{{ isset($kategori) ? route('kategori.edit.update', $kategori->id) : route('kategori.simpan') }}" method="post">
                        @csrf
                        @if(isset($kategori))
                            @method('PATCH')
                        @endif
                        <div class="card-body">
                            <div class="form-group">
                                <label for="nama_kategori">Kategori</label>
                                <input type="text" class="form-control" id="nama_kategori" name="nama_kategori" placeholder="Masukkan kategori" value="{{ isset($kategori) ? $kategori->nama_kategori : '' }}">
                            </div>
                        </div>
                    
                        <div class="card-footer">
                            <a href="{{ route('kategori') }}" class="btn btn-warning">Batal</a>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form> 
                </div>
            </div>
        </div>
    </div>
@endsection
