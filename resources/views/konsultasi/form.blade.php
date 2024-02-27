<div class="mb-3 row">
    <div class="col-md-12">
        <div class="col-12">
            <label class="form-label">Subject(Judul)</label>
            {{Form::text('subject', null, ['class' => 'form-control ','id' => 'judul','placeholder' => 'Masukkan Judul Pertanyaan','required' ])}}
        </div>
    </div>
</div>
<div class="mb-3 row">
    <div class="col-md-12">
        <div class="col-12">
            <label class="form-label">Pertanyaan</label>
            {{Form::textarea('pertanyaan', null, ['id' => 'editor', 'rows' => 4])}}
        </div>
    </div>
</div>
<div class="mb-3 row">
    <div class="col-md-12">
        @if(Request::segment(2) == 'create')
        <div class="mb-2 col-12">
            <label class="form-label">Lampiran</label>
            <input name="path_file_pertanyaan" type="file" accept="application/pdf" class="form-control">
            <small style="color:red;">(*format file pdf maksimal 2Mb.)</small>
            @error('path_file_pertanyaan')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        @elseif(Request::segment(3) == 'edit')
        <div class="col-12">
            @if ($data->path_file_pertanyaan == null)
                <label class="form-label">Lampiran</label>
                <img id="preview-image-before-upload" src="{{ asset('not-found.jpg') }}"
                    alt="preview image" style="max-height: 250px;">
            @else
                <label class="form-label">Lampiran</label>
                <object data="{{route('helper.show-picture', ['path' => $data->path_file_pertanyaan])}}" type="application/pdf" width="100%" height="500"
                    style="border: solid 1px #ccc;"></object>
            @endif
            <label class="form-label">Ganti Lampiran</label>
            <input name="path_file_pertanyaan" type="file" accept="application/pdf" class="form-control">
            @error('path_file_pertanyaan')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        @endif
    </div>
</div>
@include('action')
@push('css')
    <style>
        .ck-editor__editable {
            min-height: 100px;
        }
    </style>
@endpush

@push('js')
<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ),{
            ckfinder: {
                uploadUrl: '{{ route('ckeditor.upload').'?_token='.csrf_token() }}'
            }
        } )
        .then(editor => {
            console.log(editor)
        })
        .catch( error => {
            console.error( error );
        } );
  </script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>

    {!! JsValidator::formRequest('App\Http\Requests\KonsultasiStoreValidation') !!}
@endpush