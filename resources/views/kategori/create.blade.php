@extends('layouts.app')
{{-- Customize layout sections --}}
@section('subtitle', 'Kategori')
@section('content_header_title', 'Kategori')
@section('content_header_subtitle', 'Create')
{{-- Content body: main page content --}}

@section('content')

    <div class="container">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Buat kategori baru</h3>
            </div>
            <form method="post" action="../kategori">
                <div class="card-body">
                    <div class="form-group">
                        <label for="kodeKategori">Kode Kategori</label>
                        <input id="kodeKategori"
                        type="text"
                        name="kodeKategori"
                        placeholder="Kode Kategori"
                        class="form-control @error('kodeKategori') is -invalid
                        
                        @enderror">
                        @error('kodeKategori')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        </div>
                    <div class="form-group">
                        <label for="namaKategori">Nama Kategori</label>

                        <input type="text" class="form-control" id="namaKategori" name="namaKategori"
                            placeholder="Nama Kategori">

                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
