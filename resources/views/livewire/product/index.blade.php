@section('title', 'Produk')
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
    <div>
        @if (session()->has('message'))
            <div class="alert alert-success" role="alert">
                {{ session('message') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        @if (session()->has('pesan'))
            <div class="alert alert-danger" role="alert">
                {{ session('pesan') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
    </div>
    @if($isForm)
        @include('livewire.product.create')
    @endif

    @if($isForm == false)
    
    <div class="card-body">
        <div class="row">
            <div class="col">
                    <div class="form-group form-inline">
                        <label for="inlineinput" class="com-sm col-form-label">Show Entries :</label>
                        <select wire:model="paginate" name="" id="" class="form-control sm w-auto">
                            <option value=""></option>
                            <option value="5">5</option>
                            <option value="10">10</option>
                            <option value="15">15</option>
                            <option value="25">25</option>
                            <option value="50">50</option>
                        </select>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="form-group input-icon">
                    <input type="text" wire:model="search" class="form-control sm" placeholder="Search ...">
                    <span class="input-icon-addon">
                        <i class="fa fa-search"></i>
                    </span>
                </div>
            </div>
        </div>
        <div class="table-responsive">
            <table id="add-row" class="display table table-head-bg table-hover dataTable" role="grid" aria-describedby="add-row_info">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Status</th>
                        <th scope="col">Deskripsi</th>
                        <th style="width: 5%" scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($produks as $produk)
                        <tr>
                            <th scope="row">{{ $loop->iteration}}</th>
                            <td>{{ $produk->judul}}</td>
                            <td><img src="{{ url('storage/photos/' . $produk->gambar) }}" width="80px" height="80px">
                            </td>
                            <td>Rp. {{ $produk->harga}},00</td>
                            <td>{{ $produk->status}}</td>
                            <td>{{ $produk->deskripsi}}</td>
                            <td>
                                <div class="form-button-action">
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark mr-2" data-original-title="Edit" data-toggle="tooltip" title=""
                                        wire:click="edit({{ $produk->id }})">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <!-- Button trigger modal -->
                                <button type="button" class="btn btn-icon btn-transparent-dark mr-2" data-toggle="modal" data-target="#modal{{ $produk->id}}">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="modal{{ $produk->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">Yakin Hapus?</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" wire:click="delete({{ $produk->id}})">Yakin</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $produks->links('vendor.livewire.bootstrap') }}
        </div>

    @endif
</div>