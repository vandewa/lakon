@extends('layouts.app')
@section('content')
<main class="page-content">
    <div class="row">
        @if(auth()->user()->hasRole(['irban', 'sekretaris', 'inspektur'])) 
        <div class="mx-auto col-xl-12">
        @else
        <div class="mx-auto col-xl-6">
        @endif
            <div class="card">
                <div class="card-body">
                    <div class="p-3 border rounded">
                    <h6 class="mb-0 text-uppercase">Edit Form Konsultasi</h6>
                    <hr/>
                        {{Form::model($data, ['route' => ['konsultasi.update', $data->id],'method' => 'put','files' => true])}}
                        @if (auth()->user()->hasRole('opd')) 
                            @include('konsultasi.form')
                        @elseif(auth()->user()->hasRole('admin')) 
                            @include('konsultasi.form-admin')
                        @elseif(auth()->user()->hasRole('irban')) 
                            @include('konsultasi.form-irban')
                        @elseif(auth()->user()->hasRole('sekretaris')) 
                            @include('konsultasi.form-sekretaris')
                        @elseif(auth()->user()->hasRole('inspektur')) 
                            @include('konsultasi.form-inspektur')
                        @endif
                        {{Form::close()}}
                    </div>
                </div>
           </div>
        </div>
    </div>
</main>
@endsection

@push('js')
  <script src="{{ asset('snacked/ltr/assets/js/form-select2.js')}}"></script>
@endpush