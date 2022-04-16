@extends('templates.master')
@section('title', 'Wisata')

@section('content')
<div style="background-color: beige">
    <div class="py-3 px-5">

        <div class="d-flex mb-4">
            <div class="mr-auto">
                <form action="{{ route('wisata.index') }}" method="GET">
                    @csrf

                    <div class="input-group">
                        <input name="searchWisata" type="text" class="form-control" placeholder="Search wisata. . ."
                            aria-label="Search wisata. . ." aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <span class="input-group-text" id="basic-addon2"><i class="fa fa-fw fa-search"></i></span>
                        </div>
                    </div>
                </form>
            </div>
            <div>
                <button class="btn btn-success">
                    My Wishlist
                    <i class="fa fa-fw fa-heart"></i>
                </button>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-2 mb-3">
                <form action="{{ route('wisata.index') }}" method="GET">
                    @csrf

                    <div class="input-group">
                        <select name="searchCategory" class="custom-select" id="inputGroupSelect04"
                            aria-label="Example select with button addon">
                            <option selected value="">Choose Category...</option>
                            <option value="Kawah">Kawah</option>
                            <option value="Pantai">Pantai</option>
                            <option value="Sungai">Sungai</option>
                        </select>
                        <div class="input-group-append">
                            <input class="btn btn-outline-secondary btn-info text-white" type="submit" />
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-10">
                <h3 class="text-center text-black font-weight-bold">Popular Destination</h4>
            </div>
        </div>

        <div class="row mb-3">
            <div class="card-deck" style="width: 100%">
                @foreach ($data as $wisata)
                <div class="col-md-4 mb-3">
                    <div class="card" style="height: 100%">
                        <img class="card-img-top" src="{{ asset('assets/images/'. $wisata->picture) }}"
                            alt="tempat wisata" height="200" style="object-fit: cover">
                        <div class="card-body">
                            <h5 class="card-title">{{ $wisata->title }} </h5>
                            <p class="card-text">{{ $wisata->desc }}</p>
                        </div>
                        <div class="card-footer">
                            <a href="{{ route('wisata.show', $wisata->id_wisata) }}"
                                class="btn btn-success btn-block">Lihat Detail</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="row">
            <div class="text-center col-md-12">
                
            </div>
        </div>

    </div>
</div>
@endsection