@extends('partials.Navbar2')

@section('content')
<h2 style="Margin-top:10px;">{{ $title }}</h2>

<div class="row">
  @foreach ($data as $row)
	<div class="col-md-4 col-sm-12 mb-3">
		<div class="card">
			<img src="{{asset('images/'.$row->picture)}}" style="height:250px" class="card-img-top" alt="{{$row->title}}">
 
			<div class="card-body" style="height:200px">
				<div class="card-title"><h4>{{$row->title}}</h4></div>
				{{$row->desc}}
			</div>
 
			<div class="card-footer">
        	<a href="{{url('/EditDataWisata/'.$row->id_wisata)}}" class="btn btn-primary col-md-12 text-center">Sunting</a>
			<a href="{{url('/DeleteDataWisata/'.$row->id_wisata)}}" class="btn btn-danger col-md-12 text-center">Hapus</a>
			</div>
		</div>
	</div>
  @endforeach
</div>
@endsection