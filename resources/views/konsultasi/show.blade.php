@extends('layouts.app')
@section('content')
<main class="page-content">
    <div class="row">
        <div class="mx-auto col-xl-12">
            <div class="card">
                <div class="card-body">
                    <div class="p-3 border rounded">
                    <h6 class="mb-0 text-uppercase">Preview Konsultasi</h6>
                    <hr/>
                        {{Form::model($data)}}
                        @include('konsultasi.form-preview')
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