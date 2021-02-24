@extends('layouts.master')

@section('title', 'Data')

@section('content')
<div class="card mt-5">
  <div class="card-header mt-3">
      <h1>Gallery</h1>
  </div>
  <div class="card-body">
    <div class="">
      <a href="/galeri/create" class="btn btn-primary">Tambah Data</a>
    </div>
  <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Judul</th>
          <th scope="col">Deskripsi</th>
          <th scope="col">Gambar</th>
          <th scope="col">Status</th>
          <th scope="col">Created_by</th>
          <th scope="col">Updated_by</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php $no=1; ?>
        @foreach ($galeri as $data)
        <tr>
          <td>{{$no++}}</td>
          <td>{{$data->judul}}</td>
          <td>{{$data->deskripsi}}</td>
          <td><img src="{{url('img/'. $data->gambar)}}" width="80px" height="80px"></td>
          <td>{{$data->status}}</td>
          <td>{{$data->created_by}}</td>
          <td>{{$data->updated_by}}</td>
          <td><a href="/galeri/edit/{{$data->id}}"><button type="hidden" class="btn btn-warning btn-sm">Edit</button></a>
          <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete{{ $data->id }}">
            Hapus
          </button></td>
        </tr>
        @endforeach
      
      </tbody>
    </table>
    @foreach ($galeri as $data)

        <div class="modal modal-danger fade" id="delete{{ $data->id }}">
            <div class="modal-dialog modal-sm">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title">Yakin Hapus {{ $data->judul }}</h4>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">No</button>
                  <a href="/galeri/delete/{{ $data->id }}" class="btn btn-outline">Yes</a>
                </div>
              </div>
            </div>
          </div>
          @endforeach
  </div>
</div>

@endsection