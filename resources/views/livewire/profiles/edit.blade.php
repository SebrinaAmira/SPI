<div>
    <div class="container">
        <div class="card mt-5">
            <div class="card-header mt-3">
                <h1>Edit Profile</h1>
            </div>
            <div class="card-body">
                <form wire:submit.prevent="update">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Facebook</label>
                                <input type="text" class="form-control @error('fb') is-invalid @enderror" wire:model="fb" id="exampleFormControlInput1" value="{{ $profiless->fb}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Instagram</label>
                                <input type="text" class="form-control @error('instagram') is-invalid @enderror" wire:model="instagram" id="exampleFormControlInput1" value="{{ $profiless->instagram}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Telepon</label>
                                <input type="text" class="form-control @error('telepon') is-invalid @enderror" wire:model="telepon" id="exampleFormControlInput1" value="{{ $profiless->telepon}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Status</label>
                                <select class="form-control @error('status') is-invalid @enderror" wire:model="status" id="exampleFormControlSelect1">
                                    <option value="">Pilih</option>
                                    <option value="Show" {{ $profiless->status == 'Show' ? 'selected' : ''}}>Show</option>
                                    <option value="Hide" {{ $profiless->status == 'Pria' ? 'selected' : ''}}>Hide</option>
                                </select>
                            </div>
                        </div>
                        
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Alamat</label>
                        <textarea class="form-control @error('alamat') is-invalid @enderror" wire:model="alamat" id="exampleFormControlTextarea1" rows="3">{{ $profiless->alamat}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Deskripsi Konten</label>
                        <textarea class="form-control @error('deskripsi_konten') is-invalid @enderror" wire:model="deskripsi_konten" id="exampleFormControlTextarea1" rows="3">{{ $profiless->deskripsi_konten}}</textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
