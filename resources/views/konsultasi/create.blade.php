@extends('layouts.app')
@section('content')
<main class="page-content">
    <div class="row">
        <div class="col-xl-6 mx-auto">
            <div class="card">
                <div class="card-body">
                    <div class="border p-3 rounded">
                    <h6 class="mb-0 text-uppercase">Form Konsultasi</h6>
                    <hr/>
                        {{Form::open(['route' => 'konsultasi.store','method' => 'post', 'files' => true])}}
                        @include('konsultasi.form')
                        {{Form::close()}}
                    </div>
                </div>
           </div>
        </div>
    </div>
</main>
@endsection