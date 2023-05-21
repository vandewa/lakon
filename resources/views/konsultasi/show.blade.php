@extends('layouts.app')
@section('content')
<main class="page-content">
    <div class="row">
        <div class="col-xl-12 mx-auto">
            <div class="card">
                <div class="card-body">
                    <div class="border p-3 rounded">
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