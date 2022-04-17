@extends('partials.Navbar2')

@section('content')
<h1>{{$title}}</h1>

<form style="margin-top:20px" action="/DataWisataUpdate" method="post">
  {{ csrf_field() }}
  
  <div class="form-group">
    <label for="id">Id Wisata</label>
    <input type="text" class="form-control" id="id" name="id_wisata" readonly aria-describedby="" value="{{$data->id_wisata}}" placeholder="" required>
  </div>
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" name="title" aria-describedby="" value="{{$data->title}}" placeholder="" required>
  </div>
  <div class="form-group">
      <label for="kategori">Kategori</label>
      <select id="kategori" name="categorie" class="form-control" required>
        <option selected value="{{$data->categorie}}"></option>
        <option>Curug</option>
		    <option>Pantai</option>
		    <option>Danau</option>
        <option>Caffe</option>
        <option>Wisata Sejarah</option>
        <option>Taman</option>
      </select>
  </div>
  <div class="form-group">
    <label for="location">Location</label>
    <input type="text" class="form-control" id="location" name="location" aria-describedby="" value="{{$data->location}}" placeholder="" required>
  </div>
  <div class="form-group">
    <label for="deskripsi">Deskripsi</label>
    <textarea class="form-control" id="deskripsi" name="desc" rows="15" value="" placeholder="" required>{{$data->desc}}</textarea>
  </div>
  <div class="form-group">
      <label for="status">Status</label>
      <select id="status" name="status" class="form-control" required>
        <option selected value="{{$data->status}}"></option>
        <option>Accepted</option>
        
      </select>
  </div>
  
  <input type="submit" value="Submit"  style="margin-top:20px">
</form>
@endsection