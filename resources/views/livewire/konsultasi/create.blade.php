@section('title', 'Tambah Data')
<div>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <form wire:submit.prevent="store">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Nama</label>
                                <input type="text" class="form-control @error('nama') is-invalid @enderror" wire:model="nama" id="exampleFormControlInput1" value="{{ old('nama')}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Pesan</label>
                                <input type="text" class="form-control @error('pesan') is-invalid @enderror" wire:model="pesan" id="exampleFormControlInput1" value="{{ old('pesan')}}">
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
                        <button class="btn btn-datatable btn-icon btn-transparent-dark"
                            wire:click="back()">
                            <i class="fas fa-arrow-left"></i>
                        </button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
