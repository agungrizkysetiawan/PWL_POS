@extends('layouts.app')

{{-- Customize  sections --}}

@section('subtitle', 'Kategori')
@section('content_header_title', 'Home')
@section('content_header_subtitle', 'Kagegori')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">Manage Kategori</div>
            <div class="card-body">

                {{-- TUGAS PRAKTIKUM NO 1 JB 5 --}}
                <a href="{{ route('/kategori/create')}}" class="btn btn-primary mb-3">Add </a> 
                
                {{ $dataTable->table() }}
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    {{ $dataTable->scripts() }}
@endpush
