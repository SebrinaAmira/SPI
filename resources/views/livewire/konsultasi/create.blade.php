@section('title', 'Tambah Data')
<div class="card">
    <div class="card-body">
        <form wire:submit.prevent="store">
            <div class="form-group">
                <label for="exampleFormControlInput1">Nama</label>
                <input type="text" class="form-control @error('nama') is-invalid @enderror" wire:model="nama" id="exampleFormControlInput1" value="{{ old('nama')}}">
                @error('nama')
                <div class="text-danger">
                    <span class="error">{{ $message }}</span>
                </div>
                @enderror
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Pesan</label>
                        <input type="text" class="form-control @error('pesan') is-invalid @enderror" wire:model="pesan" id="exampleFormControlInput1" value="{{ old('pesan')}}">
                        @error('pesan')
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
                            <option value="Diterima" {{ old('status') == 'Diterima' ? 'selected' : ''}}>Diterima</option>
                            <option value="Ditolak" {{ old('status') == 'Ditolak' ? 'selected' : ''}}>Ditolak</option>
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
</div>