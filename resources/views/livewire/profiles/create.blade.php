@section('title', 'Tambah Data')
<div class="card-body">
    <form wire:submit.prevent="store">
        <div class="row">
            <input type="hidden" name="profile_id" wire:model="profile_id">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleFormControlInput1">Facebook</label>
                    <input type="text" class="form-control @error('fb') is-invalid @enderror" wire:model="fb" id="exampleFormControlInput1" value="{{ old('fb')}}">
                    @error('fb')
                    <div class="text-danger">
                        <span class="error">{{ $message }}</span>
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Instagram</label>
                    <input type="text" class="form-control @error('instagram') is-invalid @enderror" wire:model="instagram" id="exampleFormControlInput1" value="{{ old('instagram')}}">
                    @error('instagram')
                    <div class="text-danger">
                        <span class="error">{{ $message }}</span>
                    </div>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleFormControlInput1">Telepon</label>
                    <input type="text" class="form-control @error('telepon') is-invalid @enderror" wire:model="telepon" id="exampleFormControlInput1" value="{{ old('telepon')}}">
                    @error('telepon')
                    <div class="text-danger">
                        <span class="error">{{ $message }}</span>
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Status</label>
                    <select class="form-control @error('status') is-invalid @enderror" wire:model="status" id="exampleFormControlSelect1">
                        <option value="">Pilih</option>
                        <option value="Show" {{ old('status') == 'Show' ? 'selected' : ''}}>Show</option>
                        <option value="Hide" {{ old('status') == 'Pria' ? 'selected' : ''}}>Hide</option>
                    </select>
                    @error('status')
                    <div class="text-danger">
                        <span class="error">{{ $message }}</span>
                    </div>
                    @enderror
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Alamat</label>
            <textarea class="form-control @error('alamat') is-invalid @enderror" wire:model="alamat" id="exampleFormControlTextarea1" rows="3">{{ old('alamat')}}</textarea>
            @error('alamat')
            <div class="text-danger">
                <span class="error">{{ $message }}</span>
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Deskripsi Konten</label>
            <textarea class="form-control @error('deskripsi_konten') is-invalid @enderror" wire:model="deskripsi_konten" id="exampleFormControlTextarea1" rows="3">{{ old('deskripsi_konten')}}</textarea>
            @error('deskripsi_konten')
            <div class="text-danger">
                <span class="error">{{ $message }}</span>
            </div>
            @enderror
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success">
                <span class="btn-label">
                    <i class="fa fa-check"></i>
                </span>
                Simpan
            </button>
        </div>
    </form>
</div>