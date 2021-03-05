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
            {{-- <div class="col-md-3">
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
            </table> --}}
            <form wire:submit.prevent="store">
                <input type="hidden" name="profile_id" wire:model="profile_id">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Facebook</label>
                            <input type="text" class="form-control @error('fb') is-invalid @enderror" wire:model="fb" id="exampleFormControlInput1" value="{{ old('fb')}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Instagram</label>
                            <input type="text" class="form-control @error('instagram') is-invalid @enderror" wire:model="instagram" id="exampleFormControlInput1" value="{{ old('instagram')}}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Telepon</label>
                            <input type="text" class="form-control @error('telepon') is-invalid @enderror" wire:model="telepon" id="exampleFormControlInput1" value="{{ old('telepon')}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Status</label>
                            <select class="form-control @error('status') is-invalid @enderror" wire:model="status" id="exampleFormControlSelect1">
                                <option value="">Pilih</option>
                                <option value="Show" {{ old('status') == 'Show' ? 'selected' : ''}}>Show</option>
                                <option value="Hide" {{ old('status') == 'Pria' ? 'selected' : ''}}>Hide</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Alamat</label>
                    <textarea class="form-control @error('alamat') is-invalid @enderror" wire:model="alamat" id="exampleFormControlTextarea1" rows="3">{{ old('alamat')}}</textarea>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Deskripsi Konten</label>
                    <textarea class="form-control @error('deskripsi_konten') is-invalid @enderror" wire:model="deskripsi_konten" id="exampleFormControlTextarea1" rows="3">{{ old('deskripsi_konten')}}</textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-info">Simpan</button>
                </div>
            </form>
        </div>

        @endif

    </div>

</div>
