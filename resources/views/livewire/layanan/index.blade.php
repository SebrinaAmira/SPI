@section('title', 'Layanan')
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
            @if($isForm)
                @include('livewire.layanan.create')
            @endif

            @if($isForm == false)
                
            <div class="card-body">
                <div class="table-responsive">
                    <table id="add-row" class="display table table-head-bg table-striped table-hover dataTable" role="grid" aria-describedby="add-row_info">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Judul</th>
                                <th scope="col">Gambar</th>
                                <th scope="col">Status</th>
                                <th scope="col">Deskripsi</th>
                                <th style="width: 5%" scope="col">Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Gambar</th>
                                <th>Status</th>
                                <th>Deskripsi</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach($lynan as $lyn)
                                <tr>
                                    <th scope="row">{{ $loop->iteration}}</th>
                                    <td>{{ $lyn->judul}}</td>
                                    <td><img src="{{ url('storage/photos/' . $lyn->gambar) }}" width="80px" height="80px"></td>
                                    <td>{{ $lyn->status}}</td>
                                    <td>{{ $lyn->deskripsi}}</td>
                                    <td>
                                        <div class="form-button-action">
                                            <button class="btn btn-datatable btn-icon btn-transparent-dark mr-2" data-original-title="Edit" data-toggle="tooltip" title=""
                                                wire:click="edit({{ $lyn->id }})">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                            <button class="btn btn-datatable btn-icon btn-transparent-dark" data-original-title="Hapus" data-toggle="tooltip" title=""
                                                    wire:click="delete({{ $lyn->id }})">
                                                    <i class="far fa-trash-alt"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            @endif
        
        </div>
    </div>
</div>