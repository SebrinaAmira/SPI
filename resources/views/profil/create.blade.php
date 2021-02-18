@extends('layout.master')

@section('content')
    <div class="container">
        <div class="card mt-5">
            <div class="card-header mt-3">
                <h1>Tambah Profile</h1>
            </div>
            <div class="card-body">
                <form action="{{ url('/profil')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Alamat</label>
                        <textarea class="form-control @error('alamat') is-invalid @enderror" name="alamat" id="exampleFormControlTextarea1" rows="3">{{ old('alamat')}}</textarea>
                    </div>
                    <div class="form-group mt-2">
                        <label for="exampleFormControlTextarea1">Facebook</label>
                        <textarea class="form-control @error('fb') is-invalid @enderror" name="fb" id="exampleFormControlTextarea1" rows="3">{{ old('fb')}}</textarea>
                    </div>
                    <div class="form-group mt-2">
                        <label for="exampleFormControlInput1">Instagram</label>
                        <input type="text" class="form-control @error('instagram') is-invalid @enderror" name="instagram" id="exampleFormControlInput1" value="{{ old('instagram')}}">
                    </div>
                    <div class="form-group mt-2">
                        <label for="exampleFormControlInput1">Telepon</label>
                        <input type="text" class="form-control @error('telepon') is-invalid @enderror" name="telepon" id="exampleFormControlInput1" value="{{ old('telepon')}}">
                    </div>
                    <div class="form-group mt-2">
                        <label for="exampleFormControlTextarea1">Deskripsi Konten</label>
                        <textarea class="form-control @error('deskripsi_konten') is-invalid @enderror" name="deskripsi_konten" id="exampleFormControlTextarea1" rows="3">{{ old('deskripsi_konten')}}</textarea>
                    </div>
                    <div class="form-group mt-2">
                        <label for="exampleFormControlInput1">Status</label>
                        <input type="text" class="form-control @error('Status') is-invalid @enderror" name="status" id="exampleFormControlInput1" value="{{ old('status')}}">
                    </div>
                    <div class="form-group mt-2">
                        <label for="exampleFormControlInput1">Created_by</label>
                        <input type="text" class="form-control @error('created_by') is-invalid @enderror" name="created_by" id="exampleFormControlInput1" value="{{ old('created_by')}}">
                    </div>
                    <div class="form-group mt-2">
                        <label for="exampleFormControlInput1">Updated_by</label>
                        <input type="text" class="form-control @error('updated_by') is-invalid @enderror" name="updated_by" id="exampleFormControlInput1" value="{{ old('updated_by')}}">
                    </div>
                    <div class="form-group mt-2">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection