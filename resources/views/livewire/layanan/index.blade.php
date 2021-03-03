@section('title', 'Layanan')
<div>
    <div class="card mt-5">
        <div class="card-header mt-3">
            <h1>Layanan</h1>
        </div>
        @if($isForm)
            @include('livewire.layanan.create')
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
                        @foreach($lynan as $lyn)
                            <tr>
                                <th scope="row">{{ $loop->iteration}}</th>
                                <td>{{ $lyn->judul}}</td>
                                <td><img src="{{ url('storage/photos/' . $lyn->gambar) }}" width="80px" height="80px"></td>
                                <td>{{ $lyn->status}}</td>
                                <td>{{ $lyn->deskripsi}}</td>
                                <td>{{ $lyn->created_by }}</td>
                                <td>{{ $lyn->updated_by }}</td>
                                <td>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark mr-2"
                                    wire:click="edit({{ $lyn->id }})">
                                    <i class="far fa-edit"></i>
                                </button>
                                <button class="btn btn-datatable btn-icon btn-transparent-dark"
                                    wire:click="delete({{ $lyn->id }})">
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