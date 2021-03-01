<div>
    <div class="card">
        @if ($profiless)
            <livewire:profiles.create></livewire:profiles.create>
        @else
            <livewire:profiles.edit></livewire:profiles.edit>
        @endif
        <div class="card-body">
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Facebook</th>
                        <th scope="col">Instagram</th>
                        <th scope="col">Telepon</th>
                        <th scope="col">Status</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 0; ?>
                    @foreach ($profiless as $profile)
                    <?php $no++; ?>
                        <tr>
                            <th scope="row">{{ $no}}</th>
                            <td>{{ $profile->fb}}</td>
                            <td>{{ $profile->instagram}}</td>
                            <td>{{ $profile->telepon}}</td>
                            <td>{{ $profile->status}}</td>
                            <td>{{ $profile->alamat}}</td>
                            <td>{{ $profile->deskripsi_konten}}</td>
                            <td>
                                <a href="/profil/edit"><button class="btn btn-datatable btn-icon btn-transparent-dark mr-2"
                                    wire:click="edit"></a>
                                    <i class="far fa-edit"></i>
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
        </div>
    </div>
</div>
