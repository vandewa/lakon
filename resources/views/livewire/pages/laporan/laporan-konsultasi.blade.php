<div>
    <main class="page-content">
    <!--breadcrumb-->
    <div class="mb-3 page-breadcrumb d-none d-sm-flex align-items-center">
        <div class="breadcrumb-title pe-3">Laporan</div>
        <div class="ps-3">
        <nav aria-label="breadcrumb">
            <ol class="p-0 mb-0 breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Konsultasi</li>
            </ol>
        </nav>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-4 row mb-3">
                    <div class="col-md-3">
                        <div class="col-form-label">
                            Status
                        </div>
                    </div>
                    <div class="col-md-9">
                        <select name=""  class="form-control" wire:model="pilihStatus">
                            <option value="">Pilih Status</option>
                            @foreach ($status as $item)
                                <option value={{ $item->code_cd }}> {{ $item->code_nm }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-4 row mb-3">
                    <div class="col-md-3">
                        <div class="col-form-label">
                            OPD
                        </div>
                    </div>
                    <div class="col-md-9">
                        <select class="form-control" wire:model="pilihOpd">
                            <option value="">Pilih OPD</option>
                            @foreach ($listUrusan??[] as $item)
                            <option value={{ $item->id }}> {{ $item->nama }}</option>
                        @endforeach
                        </select>
                        {{ $listOpdTai??[] }}
                    </div>
                </div>
                <div class="col-md-4 row mb-3">
                    <div class="col-md-3">
                        <div class="col-form-label">
                            Urusan
                        </div>
                    </div>
                    <div class="col-md-9">
                        <select name=""  class="form-control" wire:model="pilihUrusan">
                            <option value="">Pilih Status</option>
                            @foreach ($listUrusan??[] as $item)
                                <option value={{ $item->id }}> {{ $item->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
              
                <div class="col-md-4 row mb-3">
                    <div class="col-md-3">
                        <div class="col-form-label">
                            Tanggal Mulai
                        </div>
                    </div>
                    <div class="col-md-9">
                        <input type="date" class="form-control" wire:model='tanggalStart'>
                    </div>
                </div>
                <div class="col-md-4 row mb-3">
                    <div class="col-md-3">
                        <div class="col-form-label">
                            Tanggal Sampai
                        </div>
                    </div>
                    <div class="col-md-9">
                        <input type="date" class="form-control" wire:model="tanggalEnd">
                    </div>
                </div>
                
            </div>
            <div class="float-end">
                <button class="btn btn-primary" wire:click="export">Export Excel</button>
            </div>
            
        </div>
        
       
    </div>
    <!--end breadcrumb-->
    <div class="card">
        <div class="card-body">
          <div class="d-flex align-items-center">
           
          </div>
          <table class="table">
            <thead><tr>
                <td>Kode Tiket</td>
                <td>Tanggal Masuk</td>
                <td>Subject</td>
                <td>Status</td>
                <td>Pertanyaan</td>
                <td>Penanya</td>
                <td>Jawaban</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($items as $item)
                    <tr>
                        <td> {{ $item->kode_tiket }} </td>
                        <td>{{ $item->created_at }}</td>
                        <td> {{ $item->subject }} </td>
                        <td> {{ $item->status->code_nm??"" }} </td>
                        <td> {!! $item->pertanyaan !!} </td>
                        <td> {{ $item->penanya->opd??"-" }}</td>
                        <td>{!! $item->jawaban !!}</td>
                    </tr>
                @endforeach
            </tbody>
         </table>
         {{ $items->links() }}
        </div>
      </div>
    </main>
</div>