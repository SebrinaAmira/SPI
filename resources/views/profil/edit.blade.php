@extends('layout.master')

@section('content')
    <div class="container">
        <div class="card mt-5">
            <div class="card-header mt-3">
                <h1>Tambah Profile</h1>
            </div>
            <div class="card-body">
                <form action="{{ url('/profil/'.$profil->id)}}" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Alamat</label>
                        <textarea class="form-control @error('alamat') is-invalid @enderror" name="alamat" id="exampleFormControlTextarea1" rows="3">{{ $profil->alamat}}</textarea>
                    </div>
                    <div class="form-group mt-2">
                        <label for="exampleFormControlTextarea1">Facebook</label>
                        <textarea class="form-control @error('fb') is-invalid @enderror" name="fb" id="exampleFormControlTextarea1" rows="3">{{ $profil->fb}}</textarea>
                    </div>
                    <div class="form-group mt-2">
                        <label for="exampleFormControlInput1">Instagram</label>
                        <input type="text" class="form-control @error('instagram') is-invalid @enderror" name="instagram" id="exampleFormControlInput1" value="{{ $profil->instagram}}">
                    </div>
                    <div class="form-group mt-2">
                        <label for="exampleFormControlInput1">Telepon</label>
                        <input type="text" class="form-control @error('telepon') is-invalid @enderror" name="telepon" id="exampleFormControlInput1" value="{{ $profil->telepon}}">
                    </div>
                    <div class="form-group mt-2">
                        <label for="exampleFormControlTextarea1">Deskripsi Konten</label>
                        <textarea class="form-control @error('deskripsi_konten') is-invalid @enderror" name="deskripsi_konten" id="exampleFormControlTextarea1" rows="3">{{ $profil->deskripsi_konten}}</textarea>
                    </div>
                    <div class="form-group mt-2">
                        <label for="exampleFormControlInput1">Status</label>
                        <input type="text" class="form-control @error('status') is-invalid @enderror" name="status" id="exampleFormControlInput1" value="{{ $profil->status}}">
                    </div>
                    <div class="form-group mt-2">
                        <label for="exampleFormControlInput1">Created_by</label>
                        <input type="text" class="form-control @error('created_by') is-invalid @enderror" name="created_by" id="exampleFormControlInput1" value="{{ $profil->created_by}}">
                    </div>
                    <div class="form-group mt-2">
                        <label for="exampleFormControlInput1">Updated_by</label>
                        <input type="text" class="form-control @error('updated_by') is-invalid @enderror" name="updated_by" id="exampleFormControlInput1" value="{{ $profil->updated_by}}">
                    </div>
                    <div class="form-group mt-2">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection