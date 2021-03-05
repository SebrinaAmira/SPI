@section('title', 'Konsultasi')
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
            
                @include('livewire.konsultasi.create')
    
            @endif
    
            @if ($isForm == false)  
    
            <div class="card-body">
                <div class="table-responsive">
                    <table id="add-row" class="display table table-head-bg table-striped table-hover dataTable" role="grid" aria-describedby="add-row_info">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Telepon</th>
                                <th scope="col">Pesan</th>
                                <th scope="col">Status</th>
                                <th scope="col">Alamat</th>
                                <th style="width: 5%" scope="col">Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Telepon</th>
                            <th>Pesan</th>
                            <th>Status</th>
                            <th>Alamat</th>
                            <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($knsultasi as $konsul)
                            <tr>
                                <th scope="row">{{ $loop->iteration}}</th>
                                <td>{{ $konsul->nama}}</td>
                                <td>{{ $konsul->telepon}}</td>
                                <td>{{ $konsul->pesan}}</td>
                                <td>{{ $konsul->status}}</td>
                                <td>{{ $konsul->alamat}}</td>
                                <td>
                                    <div class="form-button-action">
                                        <button class="btn btn-datatable btn-icon btn-transparent-dark mr-2" data-original-title="Edit" data-toggle="tooltip" title=""
                                            wire:click="edit({{ $konsul->id }})">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button class="btn btn-datatable btn-icon btn-transparent-dark" data-original-title="Hapus" data-toggle="tooltip" title=""
                                                wire:click="delete({{ $konsul->id }})">
                                                <i class="far fa-trash-alt"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
    
            @endif
    
        </div>
    </div>
</div>
