@extends('templates.master')
@section('title', 'Wisata')

@section('content')
<div class="py-3 px-5">
    <div class="row mb-5">
        <div class="col-md-6" style="text-align: center">
            <img src="{{ asset('assets/images/'. $data->picture) }}" class="rounded img-fluid" alt="gambar wisata" />
        </div>
        <div class="col-md-6">
            <h4 class="font-weight-bold">{{ $data->title }}</h4>
            <h5 class="subheading"> <i class="far fa-fw fa-heart"></i></h5>
            <p class="py-3">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </p>
            <div class="row">
                <div class="col-md-4 mb-2">
                    <a href="#" class="btn btn-success rounded btn-block">Berikan Ulasan</a>
                </div>
                <div class="col-md-4 mb-2">
                    <a href="{{ $data->location }}" class="btn btn-success rounded btn-block">Lihat Lokasi</a>
                </div>
                <div class="col-md-4 mb-2">
                    <a href="#" class="btn btn-success rounded btn-block">Tambah Wishlist</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row mb-5">
        <div class="col-md-12">
            <h3>Deskripsi</h3>
            <p class="text-muted">{{ $data->desc }}</p>
        </div>
    </div>

    
</div>
@endsection