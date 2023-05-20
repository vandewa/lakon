<div>
    <main class="page-content">
        <div class="row">
            <div class="col-12 col-lg-12 col-xl-12 d-flex">
               <div class="card w-100 rounded-4">
                    <div class="card-body">
                        <div class="p-4 border rounded">
                            <div class="text-center">
                                <h5 class="card-title">Urusan</h5>
                            </div>
                            <hr>
                            <form  wire:submit.prevent="simpanData" method="POST">
                                <div class="mb-3 row">
                                    <div class="col-md-12">
                                        <div class="col-12">
                                            <label class="form-label">Nama Urusan</label>
                                            <input type="text" class="form-control" wire:model.lazy="nama">
                                            @error('nama')
                                                <span class="form-text text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <div class="col-md-12">
                                        <div class="col-12">
                                            <label class="form-label">Irban</label>
                                            <select name="" id="" class="form-control" wire:model.lazy="irban_id">
                                                <option value="">Pilih Irban</option>
                                                @foreach ($listIrban as $item)
                                                    <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                                @endforeach
                                            </select>
                                            @error('irban_id')
                                                <span class="form-text text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                               
                                <div class="row">
                                    <label class="col-sm-3 col-form-label"></label>
                                    <div class="col-sm-12 text-end">
                                        <a href="{{ route('irban.index') }}" class="px-5 btn btn-secondary">Kembali</a>
                                        <button type="submit" class="px-5 btn btn-primary">Simpan</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
               </div>
            </div>
        </div>
    </main>
</div>