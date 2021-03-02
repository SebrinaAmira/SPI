@section('title', 'Create Data')
<div class="card">
    <div class="card-body">
        <form wire:submit.prevent="store" enctype="multipart/form-data">
            <input type="hidden" name="" wire:model="galeriId">
            <div class="form-group">
                <label>Judul</label>
                <input type="text" wire:model="judul" class="form-control">
                @error('judul')
                <div class="text-danger">
                    <span class="error">{{ $message }}</span>
                </div>
                @enderror
            </div>
            <div class="row">
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
                </div>
            </div>

                <div class="form-group">
                    <label>Deskripsi</label>
                    <input type="text" wire:model="deskripsi" class="form-control">
                    @error('deskripsi')
                    <div class="text-danger">
                        <span class="error">{{ $message }}</span>
                    </div>
                    @enderror
                </div>
                <button class="btn btn-datatable btn-icon btn-transparent-dark" wire:click="back()">

                    <i class="fas fa-arrow-left"></i>
                </button>
                <button type="submit" class="btn btn-info">Simpan</button>

        </form>

    </div>
</div>