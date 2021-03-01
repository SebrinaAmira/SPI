@section('title', 'Update Data')


    <div class="card">
        <div class="card-header mt-3">
            <h1>Update Data</h1>
        </div>
        <div class="card-body">
            <form wire:submit.prevent="submit" enctype="multipart/form-data">
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
                    <label>Deskripsi</label>
                    <input type="text" wire:model="deskripsi" class="form-control">
                    @error('deskripsi')
                        <div class="text-danger">
                            <span class="error">{{ $message }}</span>
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Status</label>
                    <input type="text" wire:model="status" class="form-control">
                    @error('status')
                        <div class="text-danger">
                            <span class="error">{{ $message }}</span>
                        </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-success">Simpan</button>

            </form>

        </div>
    </div>