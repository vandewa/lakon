@extends('layouts.app')
@section('content')
<main class="page-content">
    <!--breadcrumb-->
    <div class="mb-3 page-breadcrumb d-none d-sm-flex align-items-center">
        <div class="breadcrumb-title pe-3">Data Konsultasi</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="p-0 mb-0 breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">List Data Konsultasi</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="mt-4 mb-3">
        @if (auth()->user()->hasRole('opd')) 
        <a href="{{ route('konsultasi.create') }}"><button class="px-5 btn btn-primary radius-30"><i class="mr-1 bx bx-plus-circle"></i>Add Data</button></a>
        @endif
    </div>
    <!--end breadcrumb-->
    <div class="card">
        <div class="card-body">
            <div class="d-flex align-items-center"></div>
                <div class="table-responsive">
                    <table id="devan" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode Tiket</th>
                                <th>Subject(Judul)</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
@push('js')
    <script type="text/javascript">
        var table = $('#devan').DataTable({
            processing: true,
            serverSide: true,
            // "order": [
            //     [8, "desc"]
            // ],
            columns: [{
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex',
                    orderable: false,
                    searchable: false,
                    className: "text-left"
                },
                {
                    data: 'kode_tiket',
                },
                {
                    data: 'subject',
                },
                {
                    data: 'status',
                    orderable: false,
                    searchable: false,
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false
                },

            ]
        });
    </script>
@endpush