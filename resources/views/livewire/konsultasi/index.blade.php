@section('title', 'Konsultasi')
<div>
    <div class="card">
        <div class="card-header mt-3">
            <h1>Konsultasi</h1>
        </div>
        @if($isForm)
        
            @include('livewire.konsultasi.create')

        @endif

        @if ($isForm == false)  

        <div class="card-body">
            <div class="col-md-3">
                <button wire:click="create()" class="btn btn-primary">Tambah Data</button>
            </div>
            <br>
            <table class="table table-hover table-head-bg table-responsive">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Telepon</th>
                        <th scope="col">Pesan</th>
                        <th scope="col">Status</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">updated_by</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($knsultasi as $konsul)
                    <tr>
                        <th scope="row">{{ $loop->iteration}}</th>
                        <td>{{ $konsul->nama}}</td>
                        <td>{{ $konsul->telepon}}</td>
                        <td>{{ $konsul->pesan}}</td>
                        <td>{{ $konsul->status}}</td>
                        <td>{{ $konsul->alamat}}</td>
                        <td>{{ $konsul->updated_by }}</td>
                        <td>
                            <button class="btn btn-datatable btn-icon btn-transparent-dark mr-2"
                                wire:click="edit({{ $konsul->id }})">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button class="btn btn-datatable btn-icon btn-transparent-dark"
                                wire:click="delete({{ $konsul->id }})">
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
