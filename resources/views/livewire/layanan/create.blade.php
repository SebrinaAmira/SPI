@section('title', 'Tambah Data')
<div class="card-body">
    <form wire:submit.prevent="store">
        <div class="form-group">
            <label for="exampleFormControlInput1">Judul</label>
            <input type="text" class="form-control @error('judul') is-invalid @enderror" wire:model="judul" id="exampleFormControlInput1" value="{{ old('judul')}}">
            @error('judul')
            <div class="text-danger">
                <span class="error">{{ $message }}</span>
            </div>
            @enderror
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleFormControlInput1">Gambar</label>
                    <input type="file" class="form-control @error('gambar') is-invalid @enderror" wire:model="gambar" id="exampleFormControlInput1" value="{{ old('gambar')}}">
                    @error('gambar')
                    <div class="text-danger">
                        <span class="error">{{ $message }}</span>
                    </div>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Status</label>
                    <select class="form-control @error('status') is-invalid @enderror" wire:model="status" id="exampleFormControlSelect1">
                        <option value="">Pilih</option>
                        <option value="Show" {{ old('status') == 'Show' ? 'selected' : ''}}>Show</option>
                        <option value="Hide" {{ old('status') == 'Hide' ? 'selected' : ''}}>Hide</option>
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
            <label for="exampleFormControlTextarea1">Deskripsi</label>
            <textarea class="form-control @error('deskripsi') is-invalid @enderror" wire:model="deskripsi" id="exampleFormControlTextarea1" rows="3">{{ old('deskripsi')}}</textarea>
            @error('deskripsi')
            <div class="text-danger">
                <span class="error">{{ $message }}</span>
            </div>
            @enderror
        </div>
        <div class="form-group">
            <button class="btn btn-datatable btn-round btn-icon btn-transparent-dark"
                wire:click="back()">
                <i class="fas fa-arrow-alt-circle-left"></i>
            </button>
            <button type="submit" class="btn btn-success">
                <span class="btn-label">
                    <i class="fa fa-check"></i>
                </span>
                Simpan
            </button>
        </div>
    </form>
</div>