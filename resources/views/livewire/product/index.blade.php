@section('title', 'Produk')
<div>
    <div class="card mt-5">
        <div class="card-header mt-3">
            <h1>Produk</h1>
        </div>
        @if($isForm)
            @include('livewire.product.create')
        @endif

        @if($isForm == false)
        
            <div class="card-body">
                <div class="col-md-3">
                    <button wire:click="create()" class="btn btn-primary">Tambah Data</button>
                </div>
                <br>
                <table class="table table-hover table-head-bg table-responsive">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Judul</th>
                            <th scope="col">Gambar</th>
                            <th scope="col">Status</th>
                            <th scope="col">Deskripsi</th>
                            <th scope="col">Created_by</th>
                            <th scope="col">Updated_by</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($produks as $produk)
                            <tr>
                                <th scope="row">{{ $loop->iteration}}</th>
                                <td>{{ $produk->judul}}</td>
                                <td><img src="{{ url('storage/photos/' . $produk->gambar) }}" width="80px" height="80px">
                                </td>
                                <td>{{ $produk->status}}</td>
                                <td>{{ $produk->deskripsi}}</td>
                                <td>{{ $produk->created_by }}</td>
                                <td>{{ $produk->updated_by }}</td>
                                <td>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark mr-2"
                                    wire:click="edit({{ $produk->id }})">
                                    <i class="far fa-edit"></i>
                                </button>
                                <button class="btn btn-datatable btn-icon btn-transparent-dark"
                                    wire:click="delete({{ $produk->id }})">
                                    <i class="far fa-trash-alt"></i>
                                </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        @endif
    </div>
</div>