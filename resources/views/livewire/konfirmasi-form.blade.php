<div>
    <form wire:submit.prevent="submitForm"
        class="row row-cols-md-auto g-3 align-items-center justify-content-center rsvp-form">
        @csrf
        <div class="col-12">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" wire:model="nama" required>
                @error('nama')
                    <span>{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="col-12">
            <div class="mb-3">
                <label for="jumlah" class="form-label">Jumlah</label>
                <input type="number" class="form-control" id="jumlah" wire:model="jumlah" min="1"
                    max="5" length="1" value="1" required>
                @error('jumlah')
                    <span>{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="col-12">
            <div class="mb-3">
                <label for="status" class="form-label">Konfirmasi</label>
                <select wire:model="konfirmasi" id="konfirmasi" class="form-select" required>
                    <option selected>Pilih salah satu</option>
                    <option value="Hadir">Hadir</option>
                    <option value="Tidak Hadir">Tidak Hadir</option>
                </select>
                @error('konfirmasi')
                    <span>{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="col-12" style="margin-top: 35px;">
            <button type="submit" class="btn btn-primary btn-kirim" style="background-color: #674ea7;">Kirim</button>
        </div>
    </form>
    @if (session()->has('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
    @endif
</div>
