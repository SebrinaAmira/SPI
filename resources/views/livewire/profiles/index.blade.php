@section('title', 'Profile')
<div>
    <div class="card mt-5">
        <div class="card-header mt-3">
            <h1>Profile</h1>
        </div>

        @if($isForm)
        
        <div class="card-body">
            @foreach ($profiless as $profile)
            <form wire:submit.prevent="store">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Facebook</label>
                            <input type="text" class="form-control @error('fb') is-invalid @enderror" wire:model="fb" id="exampleFormControlInput1" value="{{ $profile->fb }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Instagram</label>
                            <input type="text" class="form-control @error('instagram') is-invalid @enderror" wire:model="instagram" id="exampleFormControlInput1" value="{{ $profile->instagram }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Telepon</label>
                            <input type="text" class="form-control @error('telepon') is-invalid @enderror" wire:model="telepon" id="exampleFormControlInput1" value="{{ $profile->telepon }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Status</label>
                            <select class="form-control @error('status') is-invalid @enderror" wire:model="status" id="exampleFormControlSelect1">
                                <option value="">Pilih</option>
                                <option value="Show" {{ $profile->status == 'Show' ? 'selected' : ''}}>Show</option>
                                <option value="Hide" {{ $profile->status == 'Pria' ? 'selected' : ''}}>Hide</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Alamat</label>
                    <textarea class="form-control @error('alamat') is-invalid @enderror" wire:model="alamat" id="exampleFormControlTextarea1" rows="3">{{ $profile->alamat }}</textarea>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Deskripsi Konten</label>
                    <textarea class="form-control @error('deskripsi_konten') is-invalid @enderror" wire:model="deskripsi_konten" id="exampleFormControlTextarea1" rows="3">{{ $profile->deskripsi_konten }}</textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-info">Simpan</button>
                </div>
            </form>
            @endforeach
        </div>
            
        @else
            
            @include('livewire.profiles.create')
        
        @endif

    </div>
    
</div>
