@section('title', 'Profile')
<div>
    <div class="card mt-5">
        <div class="card-header mt-3">
            <h1>Profile</h1>
        </div>
        @if($isForm)
        
            @include('livewire.profiles.create')

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
                        <th scope="col">Facebook</th>
                        <th scope="col">Instagram</th>
                        <th scope="col">Telepon</th>
                        <th scope="col">Status</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">created_by</th>
                        <th scope="col">updated_by</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($profiless as $profile)
                    <tr>
                        <th scope="row">{{ $loop->iteration}}</th>
                        <td>{{ $profile->fb}}</td>
                        <td>{{ $profile->instagram}}</td>
                        <td>{{ $profile->telepon}}</td>
                        <td>{{ $profile->status}}</td>
                        <td>{{ $profile->alamat}}</td>
                        <td>{{ $profile->created_by }}</td>
                        <td>{{ $profile->updated_by }}</td>
                        <td>
                            <button class="btn btn-datatable btn-icon btn-transparent-dark mr-2"
                                wire:click="edit({{ $profile->id }})">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button class="btn btn-datatable btn-icon btn-transparent-dark"
                                wire:click="delete({{ $profile->id }})">
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
