@extends('layout.master')

@section('content')
    <div class="card mt-5">
        <div class="card-header mt-3">
            <h1>Profile</h1>
        </div>
        <div class="card-body">
            <div class="">
                <a href="{{ url('/profil/create')}}"><button type="button" class="btn btn-primary">Tambah Data</button></a>
            </div>
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Facebook</th>
                        <th scope="col">Instagram</th>
                        <th scope="col">Telepon</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Status</th>
                        <th scope="col">created_by</th>
                        <th scope="col">updated_by</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $pf)
                        <tr>
                            <th scope="row">{{ $pf->id}}</th>
                            <td>{{ $pf->alamat}}</td>
                            <td>{{ $pf->fb}}</td>
                            <td>{{ $pf->instagram}}</td>
                            <td>{{ $pf->telepon}}</td>
                            <td>{{ $pf->deskripsi_konten}}</td>
                            <td>{{ $pf->status}}</td>
                            <td>{{ $pf->created_by}}</td>
                            <td>{{ $pf->updated_by}}</td>
                            <td>
                                <a href="{{ url('/profil/'.$pf->id.'/edit')}}"><button type="button" class="btn btn-info btn-sm inline">Edit</button></a>
                                <form class="d-inline" action="{{ url('/profil/'.$pf->id)}}" method="post">
                                    @csrf 
                                    @method('delete')
                                    <input type="hidden" name="id" value="{{$pf->id}}" readonly>
                                    <button type="submit" class="btn btn-danger btn-sm">Hapus</button></a>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            </div>
        </div>
    </div>
@endsection