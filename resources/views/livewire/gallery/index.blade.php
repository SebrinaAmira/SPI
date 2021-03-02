@section('title', 'Data')
    <div class="card mt-5">
        <div class="card-header mt-3">
            <h1>Gallery</h1>

            @if ($isFrom)

                @include('livewire.gallery.create')

            @endif

        </div>

        @if ($isFrom == false)

            <div class="card-body">
                <div class="col-md-3">
                    <button wire:click="create()" class="btn btn-primary">Tambah Data</button>
                </div>
                <table class="table table-hover table-responsive">
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
                        @foreach ($gallerys as $data)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $data->judul }}</td>
                                <td>{{ $data->deskripsi }}</td>
                                <td><img src="{{ url('storage/photos/' . $data->gambar) }}" width="80px" height="80px"></td>
                                <td>{{ $data->status }}</td>
                                <td>{{ $data->created_by }}</td>
                                <td>{{ $data->updated_by }}</td>
                                <td><button class="btn btn-datatable btn-icon btn-transparent-dark"
                                        wire:click="edit({{ $data->id }})">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark"
                                        wire:click="destroy({{ $data->id }})">
                                        <i class="far fa-trash-alt"></i>
                                    </button>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                    @foreach ($gallerys as $data)

                        <div class="modal modal-danger fade" id="delete{{ $data->id }}">
                            <div class="modal-dialog modal-sm">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title">Yakin Hapus {{ $data->judul }}</h4>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-outline pull-left"
                                            data-dismiss="modal">No</button>
                                        <a href="/galeri/delete/{{ $data->id }}" class="btn btn-outline">Yes</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </table>
            </div>

        @endif
    </div>