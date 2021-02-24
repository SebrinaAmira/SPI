@extends('layouts.master')

@section('title', 'Edit Data')

@section('content')

<form action="/galeri/update/{{$galeri->id}} " method="POST" enctype="multipart/form-data">
@csrf

<div class="card">
    <div class="card-header mt-3">
        <h1>Edit Data</h1>
    </div>
    <div class="card-body">
      <div class="">
      </div>
      <form>
          <div class="form-group">
            <label >Judul</label>
            <input type="text" name="judul" class="form-control" value="{{ $galeri->judul }}" >
            <div class="text-danger">
                @error('judul')
                    {{$message}}
                @enderror
            </div>
          </div>
          <div class="form-group">
              <label >Deskripsi</label>
              <input type="text" name="deskripsi" class="form-control" value="{{ $galeri->deskripsi }}">
              <div class="text-danger">
                @error('deskripsi')
                    {{$message}}
                @enderror
            </div>
            </div>
            <div class="form-group">
              <label >Gambar</label>
              <input type="file" name="gambar" class="form-control" value="{{ $galeri->gambar }}">
              <div class="text-danger">
                  @error('gambar')
                      {{$message}}
                  @enderror
              </div>
            </div>
            <div class="form-group">
              <label >Status</label>
              <input type="text" name="status" class="form-control" value="{{ $galeri->status }}">
              <div class="text-danger">
                @error('status')
                    {{$message}}
                @enderror
            </div>
            </div>
            <div class="form-group">
              <label >Created_by</label>
              <input type="text" name="created_by" class="form-control" value="{{ $galeri->created_by }}">
              <div class="text-danger">
                @error('created_by')
                    {{$message}}
                @enderror
            </div>
            </div>
            <div class="form-group">
              <label >Updated_by</label>
              <input type="text" name="updated_by" class="form-control" value="{{ $galeri->updated_by }}" >
              <div class="text-danger">
                @error('updated_by')
                    {{$message}}
                @enderror
            </div>
            </div>
            
        </form>
        <button class="btn btn-success">Simpan</button>
    </div>
  </div>

</form>

@endsection