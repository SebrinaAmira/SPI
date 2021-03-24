@section('title', 'Tambah Data')
<div class="card">
    <div class="card-body">
        <form wire:submit.prevent="store" enctype="multipart/form-data">
            <input type="hidden" name="" wire:model="galeriId">
            
            <div class="row">

                <div class="col-md-6">
                    <div class="form-group">
                        <label>Judul</label>
                        <input type="text" wire:model="judul" class="form-control">
                        @error('judul')
                        <div class="text-danger">
                            <span class="error">{{ $message }}</span>
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Klien</label>
                        <input type="text" wire:model="klien" class="form-control">
                        @error('klien')
                        <div class="text-danger">
                            <span class="error">{{ $message }}</span>
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Tanggal</label>
                        <input type="text" wire:model="tanggal" class="form-control">
                        @error('tanggal')
                        <div class="text-danger">
                            <span class="error">{{ $message }}</span>
                        </div>
                        @enderror
                    </div>
                </div>
    
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Gambar</label>
                        <input type="file" wire:model="gambar" class="form-control">
                        @error('gambar')
                        <div class="text-danger">
                            <span class="error">{{ $message }}</span>
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <select class="form-control" wire:model="status" id="exampleFormControlSelect1">
                            <option value="">Pilih</option>
                            <option value="Show" {{old('status') == 'Show' ? 'selected' : ''}}>Show</option>
                            <option value="Hide" {{old('status') == 'Hide' ? 'selected' : ''}}>Hide</option>
                        </select>
                        @error('status')
                        <div class="text-danger">
                            <span class="error">{{ $message }}</span>
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Layanan</label>
                        <select class="form-control" wire:model="layanan" id="exampleFormControlSelect1">
                            <option value="">Pilih</option>
                            <option value="Pagar" {{old('layanan') == 'Pagar' ? 'selected' : ''}}>Pagar</option>
                            <option value="Kanopi" {{old('layanan') == 'Kanopi' ? 'selected' : ''}}>Kanopi</option>
                            <option value="Galvalum" {{old('layanan') == 'Galvalum' ? 'selected' : ''}}>Galvalum</option>
                            <option value="Railling" {{old('layanan') == 'Railling' ? 'selected' : ''}}>Railing</option>
                        </select>
                        @error('layanan')
                        <div class="text-danger">
                            <span class="error">{{ $message }}</span>
                        </div>
                        @enderror
                    </div>
                </div>

            </div>

            <div class="form-group">
                <label>Deskripsi</label>
                <textarea type="text" wire:model="deskripsi" class="form-control"></textarea>
                @error('deskripsi')
                <div class="text-danger">
                    <span class="error">{{ $message }}</span>
                </div>
                @enderror
            </div>
            <div class="form-group">
                <button class="btn btn-datatable btn-round btn-icon btn-transparent-dark" wire:click="back()">
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
</div>
