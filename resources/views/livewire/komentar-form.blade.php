<section id="rsvp" class="rsvp">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-10 text-center">
                <h2>Ucapan & Doa</h2>
                <p>Berikan Doa dan Harapan terbaik untuk kami</p>
            </div>
        </div>
        <form wire:submit.prevent="submit"
            class="col col-cols-md-auto g-3 align-items-center justify-content-center rsvp-form">
            <div class="col-12">
                <div class="mb-3">
                    <input type="text" class="form-control" id="nama" wire:model="nama" placeholder="Nama">
                    @error('nama')
                        <span>{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="col-12">
                <div class="mb-3">
                    <textarea class="form-control" wire:model="komentar" id="" cols="30" rows="10"
                        placeholder="Tuliskan ucapan dan doamu"></textarea>
                    @error('komentar')
                        <span>{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="col-12" style="margin-top: 35px;">
                <button class="btn btn-primary" style="width: 100%;">Kirim</button>
            </div>
        </form>
        @if (session()->has('message'))
            <div class="alert alert-success mt-5">{{ session('message') }}</div>
        @endif
        <div class="row justify-content-center mt-5">
            @foreach ($komentars as $komentar)
                <div class="col-md-10 mt-2 col-sm-6 comment">
                    <div>
                        <div class="d-flex flex-start align-items-center">
                            <div>
                                <h6 class="fw-bold text-white mb-1">{{ $komentar->nama }}</h6>
                                <p class="text-muted small mb-0" style="color:rgb(168, 163, 163) !important;">
                                    {{ $komentar->created_at->diffForHumans() }}
                                </p>
                            </div>
                        </div>
                        <p class=" mb-4 pb-2">
                            {{ $komentar->komentar }}
                        </p>
                    </div>
                </div>
            @endforeach

            <div class="ml-4">
                {{ $komentars->links() }}
            </div>
        </div>

    </div>
</section>
