@section('title', 'Gallery')
<div>
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="d-flex align-items-center">
                    <h4 class="card-title">Data</h4>
                    <button wire:click="create()" class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addRowModal">
                        <i class="fa fa-plus"></i>
                        Tambah Data
                    </button>
                </div>
            </div>
            @if ($isFrom)

                @include('livewire.gallery.create')

            @endif

            @if ($isFrom == false)

            <div class="card-body">
                <div class="row">
                    <div class="col">
                        Show <span><select wire:model="paginate" name="" id="" class="form-control sm w-auto">
                                <option value="5">5</option>
                                <option value="10">10</option>
                                <option value="15">15</option>
                                <option value="25">25</option>
                                <option value="50">50</option>
                        </select> Entries</span>
                    </div>
                    <div class="col-sm-3">
                        Search<input type="text" wire:model="search" class="form-control sm">
                    </div>
                </div>
                <div class="table-responsive">
                    <table id="add-row" class="display table table-head-bg table-striped table-hover dataTable" role="grid" aria-describedby="add-row_info">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Judul</th>
                                <th scope="col">Deskripsi</th>
                                <th scope="col">Gambar</th>
                                <th scope="col">Status</th>
                                <th style="width: 5%" scope="col">Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Deskripsi</th>
                                <th>Gambar</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($gallerys as $data)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $data->judul }}</td>
                                    <td>{{ $data->deskripsi }}</td>
                                    <td><img src="{{ url('storage/photos/' . $data->gambar) }}" width="80px" height="80px"></td>
                                    <td>{{ $data->status }}</td>
                                    <td>
                                        <div class="form-button-action">
                                            <button class="btn btn-datatable btn-icon btn-transparent-dark mr-2" data-original-title="Edit" data-toggle="tooltip" title=""
                                                wire:click="edit({{ $data->id }})">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                            <button class="btn btn-datatable btn-icon btn-transparent-dark" data-original-title="Hapus" data-toggle="tooltip" title=""
                                                    wire:click="delete({{ $data->id }})">
                                                    <i class="far fa-trash-alt"></i>
                                            </button>
                                        </div>
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
    </div>
</div>