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
    <!--end breadcrumb-->
    <div class="card">
        <div class="card-body">
          <div class="d-flex align-items-center">
           
          </div>
          <table class="table">
            <thead><tr>
                <td>Kode Tiket</td>
                <td>Subject</td>
                <td>Pertanyaan</td>
                <td>Penanya</td>
                <td>Jawaban</td>
                <td>Tanggal Pembuatan</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($items as $item)
                    <tr>
                        <td> {{ $item->kode_tiket }} </td>
                        <td> {{ $item->subject }} </td>
                        <td> {!! $item->pertanyaan !!} </td>
                        <td> {{ $item->penanya->name??"-" }}</td>
                        <td>{!! $item->jawaban !!}</td>
                        <td>{{ $item->created_at }}</td>
                    </tr>
                @endforeach
            </tbody>
         </table>
         {{ $items->links() }}
        </div>
      </div>
    </main>
</div>